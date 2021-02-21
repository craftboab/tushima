(()=>{



let blackBg = document.getElementById('js-black-bg1');
let popup = document.getElementById('js-popup');
let popup_timeover = document.getElementById('js-popup1');




const quiz = [
  {
    count: 'video/quiz/BATTLE_aka_01.png',
    // question: '岡田',
    image: 'video/clip/Question_01_sample.mp4',
    image_sub: 'video/clip/Question_01_sample.png',
    image_alt: 'quiz_image',
    answers: [ 'Komodahama','Kunehama','Yokohama'],
    correct: 'Komodahama'
  }, {
    count: 'video/quiz/BATTLE_aka_02.png',
    // question: '野間',
    image: 'video/clip/Top_m_kari.mp4',
    image_sub: 'video/clip/top_sample.png',
    image_alt: 'quiz_image',
    answers: [ 'Fox','Hource','Cat'],
    correct: 'Hource'
  }, {
    count: 'video/quiz/BATTLE_aka_03.png',
    // question: 'ラム',
    image: 'video/clip/Top_m_kari.mp4',
    image_sub: 'video/clip/top_sample.png',
    image_alt: '',
    answers: [ 'Tomoe','Norio','Bunta'],
    correct: 'Bunta'
  }, {
    count: 'video/quiz/BATTLE_aka_04.png',
    // question: 'mario',
    image: 'video/clip/Top_m_kari.mp4',
    image_sub: 'video/clip/top_sample.png',
    image_alt: 'quiz_image',
    answers: [ 'IzuharaHachimangu','KitanoHachimangu','DazaifuHachimangu'],
    correct: 'IzuharaHachimangu'
  }, {
    count: 'video/quiz/BATTLE_aka_05.png',
    // question: 'lam',
    image: 'video/clip/Top_m_kari.mp4',
    image_sub: 'video/clip/top_img.png',
    image_alt: 'quiz_image',
    answers: [ 'Iki','Tushima','Gotou'],
    correct: 'Iki'
  }
];

const $window = window;
const $doc = document;

// 問題番号
const $count = $doc.getElementById('quetion_count');
// 問題文
// const $question = $doc.getElementById('js-question');
// 問題画像
const $quiz_image = $doc.getElementById('quiz_image');
// 問題回答
const $buttons = $doc.querySelectorAll('.boab');

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
  $congrat.href = "/quiz_1_correct";
  $congrat.textContent = "correct";
}

function change_fail(){
  $congrat.href = "/quiz_1_fail";
  $congrat.textContent = "fail";
}

const showEnd = () => {
  document.getElementById('result').textContent = 'Youe Score' + score + '/' + quizLen;
  // judgement();
  if(score > 4){
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
