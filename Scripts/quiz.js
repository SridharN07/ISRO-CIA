function startQuiz() {
    let username = document.getElementById('name').value;
    let error = document.getElementById('errorMessage');
    let quizbox = document.getElementById('quiz-box');
    
    if (username.length <= 0) {
        error.textContent = "Name Cannot be Empty";
        error.style.display = 'block';
        quizbox.style.display = 'none';
    } else if (/\d/.test(username)) {
        error.textContent = "Name Cannot Contain Numbers";
        error.style.display = 'block';
        quizbox.style.display = 'none';
    } else {
        // Proceed with starting the quiz
        error.style.display = 'none';
        document.getElementById('confirmationBox').style.display = 'block';
        document.getElementById('showname').innerText = username;
    }
}

function confirmation() {
    document.getElementById('confirmationBox').style.display = 'none';
    start();
}

function start() {
    let quizbox = document.getElementById('quiz-box');
    quizbox.style.display = 'block';
    
    let username = document.getElementById('name').value;
    document.getElementById('fillUser').value = username;

    const totalTime = 180; // Set total time in seconds
    const display = document.getElementById('countdown');
        let timer = totalTime;
        const interval = setInterval(function () {
            display.textContent = timer + "s"; // Display the timer
            console.log('Updated!' + timer);
            // Submit the form when timer reaches 0
            if (timer <= 0) {
                clearInterval(interval);
                document.getElementById("quiz-form").submit(); 
            } else {
                timer--; // Decrement the timer
            }
        }, 1000);
};