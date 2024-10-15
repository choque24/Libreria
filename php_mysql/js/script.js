// script.js
const temperatureControls = document.querySelector('.temperature-controls');
const saveTempButton = document.getElementById('save-temp');
const resetTempButton = document.getElementById('reset-temp');
const currentTempElement = document.getElementById('current-temp');
const targetTempElement = document.getElementById('target-temp');
const statusIndicatorElement = document.getElementById('status-indicator');

let currentTemp = 0;
let targetTemp = 0;

//temperatureControls.addEventListener('click', (e) => {
