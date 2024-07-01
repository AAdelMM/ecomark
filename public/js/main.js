
function switchLanguage(locale) {
    let currentUrl = window.location.href;
    let newUrl;

    // Check if the URL contains a language prefix
    if (currentUrl.includes('/en')) {
        newUrl = currentUrl.replace('/en', `/${locale}`);
    } else if (currentUrl.includes('/ar')) {
        newUrl = currentUrl.replace('/ar', `/${locale}`);
    } else {
        // If no prefix, assume it's the default language and add the new prefix
        let baseUrl = window.location.origin;
        let path = window.location.pathname;
        newUrl = baseUrl + `/${locale}` + path;
    }

    // Reload the page with the new URL
    window.location.href = newUrl;
}

// Some random colors
const colors = ["#3CC157", "#2AA7FF", "#1B1B1B", "#FCBC0F", "#F85F36"];

const numBalls = 50;
const balls = [];

for (let i = 0; i < numBalls; i++) {
  let ball = document.createElement("div");
  ball.classList.add("ball");
  ball.style.background = colors[Math.floor(Math.random() * colors.length)];
  ball.style.left = `${Math.floor(Math.random() * 100)}vw`;
  ball.style.top = `${Math.floor(Math.random() * 100)}vh`;
  ball.style.transform = `scale(${Math.random()})`;
  ball.style.width = `${Math.random()}em`;
  ball.style.height = ball.style.width;
  
  balls.push(ball);
  document.body.append(ball);
}

// Keyframes
balls.forEach((el, i, ra) => {
  let to = {
    x: Math.random() * (i % 2 === 0 ? -11 : 11),
    y: Math.random() * 12
  };

  let anim = el.animate(
    [
      { transform: "translate(0, 0)" },
      { transform: `translate(${to.x}rem, ${to.y}rem)` }
    ],
    {
      duration: (Math.random() + 1) * 2000, // random duration
      direction: "alternate",
      fill: "both",
      iterations: Infinity,
      easing: "ease-in-out"
    }
  );
});