/** 
 *   LGM 2018 Map scripts
 */

var map = L.map('map', {
  scrollWheelZoom: false,
}).setView([37.3754338,-5.9900776], 12);

L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

L.marker([37.3978427,-5.9874529]).addTo(map).bindPopup('Tramallol. Pasaje Mallol, 22');
L.marker([37.3975304,-5.9877096]).addTo(map).bindPopup('Lanonima. Pasaje Mallol, 16');
L.marker([37.4104313,-6.008543]).addTo(map).bindPopup('Communication Faculty. Américo Vespucio, s/n');
