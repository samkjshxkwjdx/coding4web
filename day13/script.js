let symmetry = 6;   

let angle = 360 / symmetry;
let saveButton, clearButton, mouseButton, keyboardButton;
let slider;

function setup() { 
  createCanvas(710, 710);
  angleMode(DEGREES);
  background(127);

  // Creating the save button for the file
  saveButton = createButton('save');
  saveButton.mousePressed(saveFile);

  // Creating the clear screen button
  clearButton = createButton('clear');
  clearButton.mousePressed(clearScreen);

  // Creating the button for Full Screen
  fullscreenButton = createButton('Full Screen');
  fullscreenButton.mousePressed(screenFull);

  // Setting up the slider for the thickness of the brush
  brushSizeSlider = createButton('Brush Size Slider');
  sizeSlider = createSlider(1, 32, 4, 0.1);
}

// Save File Function
function saveFile() {
  save('design.jpg');
}

// Clear Screen function
function clearScreen() {
  background(127);
}

// Full Screen Function
function screenFull() {
  let fs = fullscreen();
  fullscreen(!fs);
}

function draw() {
  translate(width / 2, height / 2);

  if (mouseX > 0 && mouseX < width && mouseY > 0 && mouseY < height) {
    let mx = mouseX - width / 2;
    let my = mouseY - height / 2;
    let pmx = pmouseX - width / 2;
    let pmy = pmouseY - height / 2;
    
    if (mouseIsPressed) {
      for (let i = 0; i < symmetry; i++) {
        rotate(angle);
        let sw = sizeSlider.value();
        strokeWeight(sw);
        line(mx, my, pmx, pmy);
        push();
        scale(1, -1);
        line(mx, my, pmx, pmy);
        pop();
      }
    }
  }
}

let x = 100,
  y = 100,
  angle1 = 0.0,
  segLength = 50;

function setup() {
  createCanvas(710, 400);
  strokeWeight(20.0);
  stroke(255, 100);
}

function draw() {
  background(0);

  dx = mouseX - x;
  dy = mouseY - y;
  angle1 = atan2(dy, dx);
  x = mouseX - cos(angle1) * segLength;
  y = mouseY - sin(angle1) * segLength;

  segment(x, y, angle1);
  ellipse(x, y, 20, 20);
}

function segment(x, y, a) {
  push();
  translate(x, y);
  rotate(a);
  line(0, 0, segLength, 0);
  pop();
}