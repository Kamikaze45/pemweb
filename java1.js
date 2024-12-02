function togglePassword() {
    const passwordField = document.getElementById('password');
    const toggleBtn = document.querySelector('.toggle-btn');
    if (passwordField.type === 'password') {
      passwordField.type = 'text';
      toggleBtn.textContent = '🙈'; // Ganti ikon ke 'hide'
    } else {
      passwordField.type = 'password';
      toggleBtn.textContent = '👁️'; // Kembali ke 'show'
    }
  }