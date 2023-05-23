const createNav = () => {
    let nav = document.querySelector('.navbar');

    nav.innerHTML = `
        <div class="nav">
           <a href="index.html"><img src="img/logo.png" class="brand-logo" alt=""></a>
            <div class="nav-items">
                <div class="search">
                    <input type="text" class="search-box" placeholder="search brand, product">
                    <button class="search-btn">search</button>
                </div>
                <a href="Formulier.html"><img src="img/user.png" alt=""></a>
                <a href="#"><img src="img/cart.png" alt=""></a>
            </div>
        </div>
        <ul class="links-container">
            <li class="link-item"><a href="index.html" class="link">home</a></li>
            <li class="link-item"><a href="#" class="link">Huizen</a></li>
            <li class="link-item"><a href="#" class="link">Villa's</a></li>
            <li class="link-item"><a href="#" class="link">Garage's</a></li>
            <li class="link-item"><a href="#" class="link">Contact</a></li>
        </ul>
    `;
}

createNav();


const productContainers = [...document.querySelectorAll('.product-container')];
const nxtBtn = [...document.querySelectorAll('.nxt-btn')];
const preBtn = [...document.querySelectorAll('.pre-btn')];

productContainers.forEach((item, i) => {
    let containerDimenstions = item.getBoundingClientRect();
    let containerWidth = containerDimenstions.width;

    nxtBtn[i].addEventListener('click', () => {
        item.scrollLeft += containerWidth;
    })

    preBtn[i].addEventListener('click', () => {
        item.scrollLeft -= containerWidth;
    })
})