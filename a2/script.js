let galleryItemsData = [
    {
        id: "namecard1",
        img: "boneAxe.png",
        title: "BONE AXE"
    },
      {
        id: "namecard2",
        img: "aruval.png",
        title: "ARUVAL"
      },
      {
        id: "namecard3",
        img: "vecharuval.png",
        title: "VECHARUVAL"
      },
      {
        id: "namecard4",
        img: "penKnife.png",
        title: "PEN KNIFE"
      },
      {
        id: "namecard5",
        img: "sword.png",
        title: "SWORD"
      },
      {
        id: "namecard6",
        img: "smallsword.png",
        title: "SMALL SWORD"
      },
      {
        id: "namecard7",
        img: "thandautam.png",
        title: "THANDAUTAM"
      },
      {
        id: "namecard8",
        img: "sulam.png",
        title: "SULAM"
      },
      {
        id: "namecard9",
        img: "bigAxe.png",
        title: "BIG AXE"
      },
      {
        id: "namecard10",
        img: "bowAndArrow.png",
        title: "BOW AND ARROW"
      },
      {
        id: "namecard11",
        img: "kathayam.png",
        title: "KATAYAM"
      },
      {
        id: "namecard12",
        img: "spear.png",
        title: "SPEAR"
      },
      {
        id: "namecard13",
        img: "gun.png",
        title: "GUN"
      },
      {
        id: "namecard14",
        img: "rocket.png",
        title: "ROCKET"
      },
      {
        id: "namecard15",
        img: "tank.png",
        title: "TANK"
      },
      {
        id: "namecard16",
        img: "missile.png",
        title: "MISSILE"
      },
      {
        id: "namecard17",
        img: "machinegun.png",
        title: "MACHINE GUN"
      },
      {
        id: "namecard18",
        img: "pistol.png",
        title: "PISTOL"
      },
      {
        id: "namecard19",
        img: "canon.png",
        title: "CANON"
      },
      {
        id: "namecard20",
        img: "rifle.png",
        title: "RIFLE"
    }
];

let gallery = document.getElementById("gallery");

let generateGallery = () => {
  return(gallery.innerHTML = galleryItemsData.map((x) => { 
    let{id, img, title} = x;
    return`
        <div id=${id} class="item">
            <div class = "img-wrapper">
                <img src =${img}>
            </div>
            <div class = "item-title">
                <p>${title}</p>
            </div>
        </div>
    `})
    .join(""));
  
};

generateGallery();


