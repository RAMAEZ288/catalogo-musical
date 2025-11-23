document.addEventListener('DOMContentLoaded', function () {
    console.log('FAQ JS cargado');

    const questions = document.getElementsByClassName('faq-question');

    for (let i = 0; i < questions.length; i++) {
        questions[i].addEventListener('click', function () {
            const allAnswers = document.getElementsByClassName('faq-answer');
            
            // Cerramos todas las respuestas
            for (let j = 0; j < allAnswers.length; j++) {
                if (allAnswers[j] !== this.nextElementSibling) {
                    allAnswers[j].classList.add('hidden');
                }
            }

            // Alternamos la respuesta de la pregunta clickeada
            const answer = this.nextElementSibling;
            if (answer) {
                answer.classList.toggle('hidden');
            }
        });
    }
});
