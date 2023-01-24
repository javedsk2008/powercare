// ParticlesJS Config.
particlesJS("particles-js", {
  "particles": {
    "number": {
      "value": 80,
     
 "density": {
        "enable": true,
        "value_area": 700
      }
    },
  
  "color": {
      "value": "#2269B9"
    },
    "shape": {
      "type": "polygon",
     
 "stroke": {
        "width": 0,
        "color": "#000000"
      },
     
 "polygon": {
        "nb_sides": 9      }
    },
   
 "opacity": {
      "value": 0.7,
      "random": false,
    
  "anim": {
        "enable": false,
        "speed": 1,
    
    "opacity_min": 0.1,
        "sync": false
      }
    },
 
   "size": {
      "value": 3,
      "random": true,
     
 "anim": {
        "enable": false,
        "speed": 40,
        "size_min": 0.1,
        "sync": false
      }
  },
  
  "line_linked": {
      "enable": true,
      "distance": 150,
      "color": "#2269B9",
      "opacity": 0.7,
      "width": 2    },
   
 "move": {
      "enable": true,
      "speed": 6,
      "direction": "none",
      "random": false,
      "straight": false,
      "out_mode": "out",
  
    "bounce": true,
      "attract": {
        "enable": false,
        "rotateX": 600,
        "rotateY": 1200
      }
    }
  },
 
 "interactivity": {
    "detect_on": "canvas",
    "events": {
      "onhover": {
        "enable": true,
        "mode": "grab"
      },
     
 "onclick": {
        "enable": true,
        "mode": "push"
      },
      "resize": true
    },
   
 "modes": {
      "grab": {
        "distance": 140,
        "line_linked": {
          "opacity": 1
        }
      },
    
  "bubble": {
        "distance": 400,
        "size": 40,
        "duration": 2,
        "opacity": 8,
        "speed": 3
      },
  
    "repulse": {
        "distance": 200,
        "duration": 0.4
      },
      "push": {
        "particles_nb": 4
      },
  
    "remove": {
        "particles_nb": 2
      }
    }
  },
  "retina_detect": true
});
