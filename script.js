
/*-------------------------------------
hamburger（共通）
--------------------------------------*/
const navi = document.querySelector('#header .header .navi');
const hamburger = document.querySelector('.hamburger');
const navLinks = document.querySelectorAll('#header .header .navi a');

hamburger.addEventListener('click', () => {
  navi.classList.toggle('active');
  hamburger.classList.toggle('active');
});

navLinks.forEach(link => {
  link.addEventListener('click', (e) => {
    const href = link.getAttribute('href');
    
    // ハッシュ部分を抽出（index.html#about → #about）
    const hashIndex = href.indexOf('#');
    if (hashIndex !== -1) {
      const targetId = href.substring(hashIndex);
      const target = document.querySelector(targetId);
      
      // 同じページ内のアンカーリンクの場合のみスムーススクロール
      if (target) {
        e.preventDefault();
        
        const headerHeight = document.querySelector('#header .header').offsetHeight;
        const position = target.getBoundingClientRect().top + window.scrollY - headerHeight - 20;

        // スムーススクロール
        window.scrollTo({
          top: position,
          behavior: 'smooth'
        });
      }
    }

    navi.classList.remove('active');
    hamburger.classList.remove('active');
  });
});

/*-------------------------------------
スクロール時フェード（共通）
--------------------------------------*/
const fades = document.querySelectorAll('.fadein');

const keyframes = [
  { opacity: 0, transform: 'translateY(100px)' },
  { opacity: 1, transform: 'translateY(0)' }
];

const fadeAnimation = (entries, obs) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.animate(keyframes, {
        duration: 1000,
        fill: 'forwards',
        easing: 'ease-out'
      });
      obs.unobserve(entry.target);
    }
  });
};

const fadeObserver = new IntersectionObserver(fadeAnimation, {
  threshold: 0.5
});

fades.forEach(fade => {
  fadeObserver.observe(fade);
});

/*----------------------------------------------------
about以降にスクロール時headerにバックグランドカラーを設定（共通）
-----------------------------------------------------*/
const header = document.querySelector('#header .header');
const trigger = document.querySelector('.head-trigger');
const headerImg = document.querySelector('#header .header .img img');

// トリガー要素が存在する場合のみスクロールイベントを設定
if (trigger) {
  window.addEventListener('scroll', () => {
    const triggerTop = trigger.offsetTop;

    if (window.scrollY > triggerTop - 100) { 
      header.classList.add('active');
      headerImg.classList.add('active');
    } else {
      header.classList.remove('active');
      headerImg.classList.remove('active');
    }
  });
}

/*----------------------------------------------------
swiper設定（トップページ）
-----------------------------------------------------*/
var swiper = new Swiper(".mySwiper", {
  slidesPerView: 3, // 一度に表示する枚数
  spaceBetween: 20, // マージン
  loop: true, // ループ有効
  speed: 6000, // ループの時間
  autoplay: {
    delay: 0,
  },
});

/*----------------------------------------------------
steps スライドイン（serviceページ）
-----------------------------------------------------*/
const stepItems = document.querySelectorAll('.steps .inner .item-left, .steps .inner .item-right');
if (stepItems.length) {
  const animateItem = (entries, observer) => {
    entries.forEach(entry => {
      if (!entry.isIntersecting) return;
      const el = entry.target;
      const fromX = el.classList.contains('item-right') ? '100vw' : '-100vw';

      el.animate([
        { transform: `translateX(${fromX})`, opacity: 0 },
        { transform: 'translateX(0)', opacity: 1 }
      ], {
        duration: 600,
        easing: 'ease-out',
        fill: 'forwards'
      });

      el.classList.add('in');
      observer.unobserve(el);
    });
  };

  const observer = new IntersectionObserver(animateItem, { threshold: 0.2 });
  stepItems.forEach(el => observer.observe(el));
}

/*----------------------------------------------------
newsページ　タグフィルター
-----------------------------------------------------*/
const tagAll = document.querySelector('.tag-all');
const tagPress = document.querySelector('.tag-press');
const tagNews = document.querySelector('.tag-news');
const tagEvent = document.querySelector('.tag-event');

const newsAll = document.querySelector('.all-wrapper');
const newsPress = document.querySelector('.press-wrapper');
const newsNews = document.querySelector('.news-wrapper');
const newsEvent = document.querySelector('.event-wrapper');

if (tagAll && tagPress && tagNews && tagEvent) {
  tagAll.addEventListener('click', () => {
    newsAll.classList.remove('active');
    newsPress.classList.remove('active');
    newsNews.classList.remove('active');
    newsEvent.classList.remove('active');
  });

  tagPress.addEventListener('click', () => {
    newsAll.classList.add('active');
    newsPress.classList.add('active');
    newsNews.classList.remove('active');
    newsEvent.classList.remove('active');
  });

  tagNews.addEventListener('click', () => {
    newsAll.classList.add('active');
    newsPress.classList.remove('active');
    newsNews.classList.add('active');
    newsEvent.classList.remove('active');
  });

  tagEvent.addEventListener('click', () => {
    newsAll.classList.add('active');
    newsPress.classList.remove('active');
    newsNews.classList.remove('active');
    newsEvent.classList.add('active');
  });
}