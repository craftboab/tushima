(()=>{



let blackBg = document.getElementById('js-black-bg1');
let popup = document.getElementById('js-popup');
let popup_timeover = document.getElementById('js-popup1');




const quiz = [
  {
    count: 'video/img_s/q1.png',
    // question: '誉れを言った人気者',
    image: 'video/clip/Top_m_kari.mp4',
    image_alt: 'quiz_image',
    answers: [ 'A','B','C','D'],
    correct: 'A'
  }, {
    count: 'video/img_s/q2.png',
    // question: '１＋１＝',
    image: 'video/clip/Top_m_kari.mp4',
    image_alt: 'quiz_image',
    answers: [ 'A','B','C','D'],
    correct: 'A'
  }, {
    count: 'video/img_s/q3.png',
    // question: '２＋４＝',
    image: 'video/clip/Top_m_kari.mp4',
    image_alt: 'quiz_image',
    answers: [ 'A','B','C','D'],
    correct: 'A'
  }, {
    count: 'video/img_s/q4.png',
    // question: '５＋５＝',
    image: 'video/clip/Top_m_kari.mp4',
    image_alt: 'quiz_image',
    answers: [ 'A','B','C','D'],
    correct: 'A'
  }
];

const $window = window;
const $doc = document;

//問題番号
const $count = $doc.getElementById('quetion_count');
// 問題文
// const $question = $doc.getElementById('js-question');
// 問題画像
const $quiz_image = $doc.getElementById('quiz_image');
// 問題回答
const $buttons = $doc.querySelectorAll('.boab');
// 地図
// const $panel_map = $doc.querySelectorAll('.panel');

const quizLen = quiz.length;
let quizCount = 0;
let score = 0;

const init = () => {
  $count.src = quiz[quizCount].count;
  // $question.textContent = quiz[quizCount].question;
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
  $congrat.href = "/quiz_2_correct";
  $congrat.textContent = "correct";
}

function change_fail(){
  $congrat.href = "/quiz_2_fail";
  $congrat.textContent = "fail";
}

const showEnd = () => {
  document.getElementById('result').textContent = '終了！あなたのスコアは' + score + '/' + quizLen + 'です';
  // judgement();
  if(score > 3){
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
