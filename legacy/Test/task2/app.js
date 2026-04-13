/**
 * Copyright (c) 2025 sakib-maho
 * Licensed under the MIT License
 * See LICENSE file for details
 */

const MoveTheBox = () => {
  var elem = document.getElementById("box");
  let posx = 0;
  let posy = 50;
  const frame = () => {
    if (posy <= window.innerHeight - 100 && posx <= window.innerWidth - 100) {
      posx = posx + 10;
      posy = posy + 10;
      elem.style.marginTop = posy + "px";
      elem.style.marginLeft = posx + "px";
    } else if (posy >= 50) {
      if (posy >= 50) clearInterval(firstInteval);
      let secondInterval = setInterval(() => {
        posx = posx - 10;
        posy = posy - 10;
        elem.style.marginTop = posy + "px";
        elem.style.marginLeft = posx + "px";
        if (posy <= 50) {
          clearInterval(secondInterval);
        }
      }, 1000);
    }
  };
  let firstInteval = setInterval(frame, 1000);
};
