var myMap;

// Дождёмся загрузки API и готовности DOM.
ymaps.ready(init);

function init () { // Создание экземпляра карты и его привязка к контейнеру с заданным id ("map").
    myMap = new ymaps.Map('map', {
        // При инициализации карты обязательно нужно указать её центр и коэффициент масштабирования.
        center: [57.546336, 40.014670],
        zoom: 14,
		controls: ['mediumMapDefaultSet'],
    }, {
        searchControlProvider: 'yandex#search'
    });
		
	myMap.geoObjects.add(new ymaps.Placemark([57.546336, 40.014670], {
		balloonContent: 'Россия, Ярославская область, Ярославский район, Туношенское сельское поселение',
		iconCaption: 'Орловские дачи'
	}, {
		preset: 'islands#redIcon'
	}));

	myMap.behaviors.disable('scrollZoom');
	
    document.getElementById('destroyButton').onclick = function () {
        myMap.destroy(); // Для уничтожения используется метод destroy.
    };
	

}



