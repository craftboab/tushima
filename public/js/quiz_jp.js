(()=>{



let blackBg = document.getElementById('js-black-bg1');
let popup = document.getElementById('js-popup');
let popup_timeover = document.getElementById('js-popup1');




const quiz = [
  {
    count: 'video/quiz/Question_no1.png',
    // question: '岡田',
    image: 'video/quiz_clip/Question_01.mp4',
    image_sub: 'video/quiz_clip/Question_01_sample.png',
    image_alt: 'quiz_image',
    answers: [ '小茂田浜','久根浜','横浜'],
    correct: '小茂田浜'
  }, {
    count: 'video/quiz/Question_no2.png',
    // question: '野間',
    image: 'video/quiz_clip/Question_02.mp4',
    image_sub: 'video/quiz_clip/Question_01_sample.png',
    image_alt: 'quiz_image',
    answers: [ 'キツネ','馬','ヤマネコ'],
    correct: '馬'
  }, {
    count: 'video/quiz/Question_no3.png',
    // question: 'ラム',
    image: 'video/quiz_clip/Question_03.mp4',
    image_sub: 'video/quiz_clip/Question_01_sample.png',
    image_alt: '',
    answers: [ '巴','典雄','文太'],
    correct: '文太'
  }, {
    count: 'video/quiz/Question_no4.png',
    // question: 'mario',
    image: 'video/quiz_clip/Question_04.mp4',
    image_sub: 'video/quiz_clip/Question_01_sample.png',
    image_alt: 'quiz_image',
    answers: [ 'A','B','C'],
    correct: 'B'
  }, {
    count: 'video/quiz/Question_no5.png',
    // question: 'lam',
    image: 'video/quiz_clip/Question_05.mp4',
    image_sub: 'video/quiz_clip/Question_01_sample.png',
    image_alt: 'quiz_image',
    answers: [ 'A','B','C'],
    correct: 'A'
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
  $congrat.href = "/quiz_jp_correct_1";
  $congrat.textContent = "勝利";
}

function change_fail0(){
  $congrat.href = "/quiz_jp_fail_1_0";
  $congrat.textContent = "敗北";
}
function change_fail1(){
  $congrat.href = "/quiz_jp_fail_1_1";
  $congrat.textContent = "敗北";
}
function change_fail2(){
  $congrat.href = "/quiz_jp_fail_1_2";
  $congrat.textContent = "敗北";
}
function change_fail3(){
  $congrat.href = "/quiz_jp_fail_1_3";
  $congrat.textContent = "敗北";
}
function change_fail4(){
  $congrat.href = "/quiz_jp_fail_1_4";
  $congrat.textContent = "敗北";
}

const showEnd = () => {
  document.getElementById('result').textContent = 'あなたのスコアは  ' + score + '/' + quizLen + 'です';
  // judgement();
  if(score === 5){
    change_correct();
  }else if(score === 4){
    change_fail4();
  }else if(score === 3){
    change_fail3();
  }else if(score === 2){
    change_fail2();
  }else if(score === 1){
    change_fail1();
  }else if(score === 0){
    change_fail0();
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
