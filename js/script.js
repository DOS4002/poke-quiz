const startBtn = document.querySelector('.srt-button');
const popupInfo = document.querySelector('.popup-info');
const exitBtn = document.querySelector('.exit');
const main = document.querySelector('.main');


startBtn.onclick = () => {
    popupInfo.classList.add('active');
    main.classList.add('active');
}

exitBtn.onclick = () => {
    popupInfo.classList.remove('active');
    main.classList.remove('active');
}

let questionCount = 0;
const nextBtn = document.querySelector('>next-btn');

nextBtn.onclick = () => {

    if(questionCount < questions.length - 1){
        questionCount++;
        showQuestions(questionCount);
    } else{
        console.log
    }
    
}

const optionList = document.querySelector('.option-list');

function showQuestions(index){
    const questionText = document.querySelector('.question-text');
    questionText.textContent = `${questions[index].numb}. ${questons[index]. question}`;

    let optionTag = `<div class="option"> <span>${questions[index].options[0]}A. Pikachu</span></div>
    <div class="option"> <span>${questions[index].options[1]}A. Pikachu</span></div>
    <div class="option"> <span>${questions[index].options[2]}A. Pikachu</span></div>
    <div class="option"> <span>${questions[index].options[3]}A. Pikachu</span></div>`;

    optionList.innerHTML = optionTag;

    const option = document.querySelectorAll('.option');
    for(let i = 0; i < option.length; i++){
        option[i].setAttribute('onclick', 'optionSelected(this)');
    }
}

function optionSelect(answer){
    let useAnswer = answer.textContent;
    console.log(useAnswer);
}

// script.js
document.addEventListener('DOMContentLoaded', function() {
    const options = document.querySelectorAll('.option');

    options.forEach(option => {
        option.addEventListener('click', function() {
            const selectedOption = this.getAttribute('id'); // ID da alternativa clicada
            const correctOption = 'optionA'; // Supondo que a alternativa correta seja a A
            
            if (selectedOption === correctOption) {
                this.classList.add('correct'); // Adiciona uma classe para destacar a alternativa correta
            }
            
            // Atualiza a pontuação (você pode implementar isso de acordo com a lógica do seu jogo)
            if (selectedOption === correctOption) {
                // Atualize a pontuação aqui
            }

            setTimeout(() => {
                this.classList.remove('correct'); // Remove a classe após um tempo
            }, 1000);
        });
    });
});
