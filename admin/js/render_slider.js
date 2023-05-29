(function () {
  const slider_section = document.querySelector('.hero-slider-rooms');
  let data = slider_section.id;
  let arr_slider = [];
  let ind_start = 0;
  for (let i = 0; i < data.length; i++) {
    if (data[i] == '|') {
      arr_slider.push(data.slice(ind_start, i));
      ind_start = i + 1;
    }
  }
  arr_slider.push(data.slice(ind_start, data.length));

	for(let item of arr_slider) {
		const div = document.createElement('div');
		div.classList.add('hs-item');
		div.classList.add('set-bg');
		div.setAttribute('data-setbg', '/img/slider/'+item);
		slider_section.appendChild(div);
	}

  // console.log(arr_slider);
})();
