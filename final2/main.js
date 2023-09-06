const wrapper = document.querySelector(".sliderWrapper");
const menuItems = document.querySelectorAll(".menuItem");

const products = [
  {
    id: 1,
    title: "whey protien",
    price: 70,
    colors: [
      {
        code: "red",
        img: "./img/muscletech.webp",
      },
    ],
  },
  {
    id: 2,
    title: "creatine",
    price: 30,
    colors: [
      {
        code: "lightgray",
        img: "./img/creatine.webp",
      },
    ],
  },
  {
    id: 3,
    title: "BCAA",
    price: 20,
    colors: [
      {
        code: "yellow",
        img: "./img/BCAA.webp",
      },
    ],
  },
  {
    id: 4,
    title: "L-carnatine",
    price: 14,
    colors: [
      {
        code: "lightpink",
        img: "./img/L-Carnatine.png",
      },
      
    ],
  },
  {
    id: 5,
    title: "our merch",
    price: 10,
    colors: [
      {
        code: "blue",
        img: "./img/merch.png",
      },
      
    ],
  },
];

let choosenProduct = products[0];

const currentProductImg = document.querySelector(".productImg");
const currentProductTitle = document.querySelector(".productTitle");
const currentProductPrice = document.querySelector(".productPrice");
const currentProductColors = document.querySelectorAll(".color");
const currentProductSizes = document.querySelectorAll(".size");

menuItems.forEach((item, index) => {
  item.addEventListener("click", () => {
    //change the current slide
    wrapper.style.transform = `translateX(${-100 * index}vw)`;

    //change the choosen product
    choosenProduct = products[index];

    //change texts of currentProduct
    currentProductTitle.textContent = choosenProduct.title;
    currentProductPrice.textContent =  `${choosenProduct.price}JD`;
    currentProductImg.src = choosenProduct.colors[0].img;

    //assing new colors
    currentProductColors.forEach((color, index) => {
      color.style.backgroundColor = choosenProduct.colors[index].code;
    });
  });
});




const productButton = document.querySelector(".productButton");
const payment = document.querySelector(".payment");
const close = document.querySelector(".close");

productButton.addEventListener("click", () => {
  payment.style.display = "flex";
});

close.addEventListener("click", () => {
  payment.style.display = "none";
});

document.addEventListener("DOMContentLoaded", function () {
  // Find the "Join" button by its id
  const joinButton = document.getElementById("joinButton");

  // Add a click event listener to the button
  joinButton.addEventListener("click", function () {
      // Display an alert when the button is clicked
      alert("You have successfully joined!");
  });
});
