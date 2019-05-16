'use strict';

(function () {

  var tbody = document.querySelector('.dataTable')
  var WIDTH_PHOTO = 50;
  var HEIGHT_PHOTO = 50;

  function errorBlock(errorMessage) {
    var div = document.createElement('div');
    div.style = 'z-index: 10; margin: 0; text-align: center; background-color: white; border: 3px solid black;';
    div.style.position = 'fixed';
    div.style.width = '50%';
    div.style.height = '70px';
    div.style.paddingTop = '20px';
    div.style.left = '25%';
    div.style.top = '25%';
    div.style.fontSize = '30px';
    div.textContent = errorMessage;
    div.style.color = 'DarkRed';
    document.body.prepend(div);
    setTimeout(function () {
      div.classList.add('hidden');
    }, 2500);
  }

  function createTable (arr) {

    arr.data.forEach(function (item, i) {
      var tr = document.createElement('tr');
      var th = document.createElement('th');
      var tdFirst = document.createElement('td');
      var tdSecond = document.createElement('td');
      var tdSrc = document.createElement('td');
      var img = document.createElement('img');
      console.log(arr.data);
      th.setAttribute('scope', 'row');
      th.textContent = i + 1;
      img.src = item.avatar;
      img.style.width = WIDTH_PHOTO + 'px';
      img.style.height = HEIGHT_PHOTO + 'px';
      tdSrc.appendChild(img);
      tdFirst.textContent = item.first_name;
      tdSecond.textContent = item.last_name;
      tr.appendChild(th);
      tr.appendChild(tdFirst);
      tr.appendChild(tdSecond);
      tr.appendChild(tdSrc);
      tbody.appendChild(tr);
    });
  }

  window.load(function (response) {
  createTable (response);
  }, function (errorMessage) {
  errorBlock(errorMessage);
  });

})();