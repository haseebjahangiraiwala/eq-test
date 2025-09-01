submitBtn.addEventListener('click', () => {
  // force saving selection of current question if any option selected
  const selected = document.querySelector('.option.selected');
  if (selected) {
    const q = QUESTIONS[currentIndex];
    answers[q.id] = selected.getAttribute('data-choice');
  }
 
  // check if no answers at all
  if (Object.keys(answers).length === 0) {
    alert('Please answer at least one question before submitting.');
    return;
  }
 
  // check for unanswered questions
  const missing = QUESTIONS.filter(q => !answers[q.id]);
  if (missing.length) {
    if (!confirm(`You have ${missing.length} unanswered question(s). Submit anyway?`)) return;
  }
 
  // payload
  const payload = {
    user_name: prompt('Enter your name (optional)', 'Guest') || 'Guest',
    answers: answers,
  };
 
  fetch('submit.php', {
    method: 'POST',
    headers: {'Content-Type':'application/json'},
    body: JSON.stringify(payload)
  })
  .then(r => r.json())
  .then(data => {
    if (data.success) {
      window.location.href = 'submit.php?result_id=' + encodeURIComponent(data.result_id);
    } else {
      alert('Error: ' + (data.message || 'Unknown error'));
    }
  })
  .catch(err => {
    alert('Network error while submitting. ' + err);
  });
});
 
