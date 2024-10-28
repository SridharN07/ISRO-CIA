setTimeout(() => {
    const mainDiv = document.getElementById('main');
    const myDiv = document.getElementById('loader-wrapper');
    myDiv.style.display = 'none';
    mainDiv.style.display = 'block';
}, 3000);
