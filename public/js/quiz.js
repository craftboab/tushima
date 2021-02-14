(()=>{



// let start_quiz = document.getElementById('start_quiz');
let blackBg = document.getElementById('js-black-bg1');
let popup = document.getElementById('js-popup');
let popup_timeover = document.getElementById('js-popup1');


// window.onload = function() {
//   start_quiz.classList.add('is-show');
//   closePopUp(blackBg);
//
//   function closePopUp() {
//     start_quiz.addEventListener('click', function() {
//       count_start();
//       start_quiz.classList.remove('is-show');
//     })
//   }
// }



const quiz = [
  {
    count: 'quietion1',
    question: '岡田',
    image: 'video/Top_m_kari.mp4',
    image_alt: 'quiz_image',
    answers: [ 'アンディ', 'としお', 'かつあき', 'たけお'],
    correct: 'としお'
  }, {
    count: 'quietion2',
    question: '野間',
    image: 'video/Top_m_kari.mp4',
    image_alt: 'quiz_image',
    answers: [ 'アンディ', 'としお', 'かつあき', 'たけお'],
    correct: 'かつあき'
  }, {
    count: 'quietion3',
    question: 'ラム',
    image: '',
    image_alt: '',
    answers: [ 'アンディ', 'としお', 'katus', 'たけお'],
    correct: 'アンディ'
  }, {
    count: 'quietion4',
    question: 'mario',
    image: 'images/order_pic.jpg',
    image_alt: 'quiz_image',
    answers: [ 'アンディ', 'garcia', 'かつあき', 'たけお'],
    correct: 'としお'
  }, {
    count: 'quietion5',
    question: 'lam',
    image: 'video/Top_m_kari.mp4',
    image_alt: 'quiz_image',
    answers: [ 'アンディ', 'willson', 'かつあき', 'たけお'],
    correct: 'かつあき'
  }
];

const $window = window;
const $doc = document;

// 問題番号
const $count = $doc.getElementById('quetion_count');
// 問題文
const $question = $doc.getElementById('js-question');
// 問題画像
const $quiz_image = $doc.getElementById('quiz_image');
// 問題回答
const $buttons = $doc.querySelectorAll('.boab');

const quizLen = quiz.length;
let quizCount = 0;
let score = 0;

const init = () => {
  $count.textContent = quiz[quizCount].count;
  $question.textContent = quiz[quizCount].question;
  $quiz_image.src = quiz[quizCount].image;
  $quiz_image.alt = quiz[quizCount].image_alt;
  // $panel_map.src = quiz[quizCount].panel_img;
  // $panel_map.alt = quiz[quizCount].panel_alt;
  const buttonLen = $buttons.length;
  let btnIndex = 0;

  while(btnIndex < buttonLen){
    $buttons[btnIndex].textContent = quiz[quizCount].answers[btnIndex];
    btnIndex++;
  }

};

const goToNext = () => {
  quizCount++;
  if(quizCount < quizLen){
    init(quizCount);
  } else {
    popup.classList.add('is-show');
    showEnd();
  }
};

const judge = (elm) => {
  if(elm.textContent === quiz[quizCount].correct){
    score++;
  } else {

  }
  goToNext();
};

// 合否判定
const $congrat = $doc.getElementById('congrat');

function change_correct(){
  $congrat.href = "/quiz_1_correct";
  $congrat.textContent = "correct";
}

function change_fail(){
  $congrat.href = "/quiz_1_fail";
  $congrat.textContent = "fail";
}

const showEnd = () => {
  document.getElementById('result').textContent = '終了！あなたのスコアは' + score + '/' + quizLen + 'です';
  // judgement();
  if(score > 2){
    change_correct();
   }else{
    change_fail();
   }
  }

init();

let answersIndex = 0;
let answersLen = quiz[quizCount].answers.length;

while(answersIndex < answersLen){
  $buttons[answersIndex].addEventListener('click', (e) => {
    judge(e.target);
  });
  answersIndex++;
}

})();
