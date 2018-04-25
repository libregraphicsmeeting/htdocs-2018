/**
 *   LGM 2018 Map scripts
 */

var map = L.map('map', {
  scrollWheelZoom: false,
}).setView([37.4064714,-5.9892440], 15);

L.tileLayer('https://{s}.tile.osm.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

L.marker([37.3978382,-5.9851946]).addTo(map).bindPopup('<a href="http://www.tramallol.cc/compartir_espacio/" target="_blank">Tramallol</a>. Pasaje Mallol, 22');
L.marker([37.410435,-6.0063015]).addTo(map).bindPopup('<a href="https://fcom.us.es/" target="_blank">Faculty of Communication</a>. Américo Vespucio, s/n');
