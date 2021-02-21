(()=>{



let blackBg = document.getElementById('js-black-bg1');
let popup = document.getElementById('js-popup');
let popup_timeover = document.getElementById('js-popup1');




const quiz = [
  {
    count: 'video/quiz/BATTLE_ao_01.png',
    // question: '誉れを言った人気者',
    image: 'video/clip/Top_m_kari.mp4',
    image_sub: 'video/clip/top_sample.png',
    image_alt: 'quiz_image',
    answers: [ 'Kojiki','Nihonshoki','Manyoushu'],
    correct: 'Manyoushu'
  }, {
    count: 'video/quiz/BATTLE_ao_02.png',
    // question: '１＋１＝',
    image: 'video/clip/Top_m_kari.mp4',
    image_sub: 'video/clip/top_sample.png',
    image_alt: 'quiz_image',
    answers: [ 'Semi','Hotaru','Kabutomushi'],
    correct: 'Semi'
  }, {
    count: 'video/quiz/BATTLE_ao_03.png',
    // question: '２＋４＝',
    image: 'video/clip/Top_m_kari.mp4',
    image_sub: 'video/clip/top_sample.png',
    image_alt: 'quiz_image',
    answers: [ 'Harunobu Adachi','Hironori Nagao','Tokiyori Yarikawa'],
    correct: 'Harunobu Adachi'
  }, {
    count: 'video/quiz/BATTLE_ao_04.png',
    // question: '５＋５＝',
    image: 'video/clip/Top_m_kari.mp4',
    image_sub: 'video/clip/top_sample.png',
    image_alt: 'quiz_image',
    answers: [ 'A','B','C'],
    correct: 'A'
  }, {
    count: 'video/quiz/BATTLE_ao_05.png',
    // question: '５＋５＝',
    image: 'video/clip/Top_m_kari.mp4',
    image_sub: 'video/clip/top_sample.png',
    image_alt: 'quiz_image',
    answers: [ '800m','2.2km','42.195km'],
    correct: '2.2km'
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
  $quiz_image.poster = quiz[quizCount].image_sub;
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
  document.getElementById('result').textContent = 'Youe Score' + score + '/' + quizLen;
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
