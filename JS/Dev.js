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
            <li class="link-item"><a href="contact.html" class="link">Contact</a></li>
        </ul>
    `;
}

const createsign = () => {
    let container = document.querySelector('.container');

    container.innerHTML = `
         <div class="row col-md-6 col-md-offset-3">
    <div class="panel panel-primary">
      <div class="panel-heading text-center">
        <h1>Registration Form</h1>
      </div>
      <div class="panel-body">
        <form action="PHP/connect.php" method="post">
          <div class="form-group">
            <label for="firstName">First Name</label>
            <input
                    type="text"
                    class="form-control"
                    id="firstName"
                    name="firstName"
            />
          </div>
          <div class="form-group">
            <label for="lastName">Last Name</label>
            <input
                    type="text"
                    class="form-control"
                    id="lastName"
                    name="lastName"
            />
          </div>
          <div class="form-group">
            <label for="gender">Gender</label>
            <div>
              <label for="male" class="radio-inline"
              ><input
                      type="radio"
                      name="gender"
                      value="m"
                      id="male"
              />Male</label
              >
              <label for="female" class="radio-inline"
              ><input
                      type="radio"
                      name="gender"
                      value="f"
                      id="female"
              />Female</label
              >
              <label for="others" class="radio-inline"
              ><input
                      type="radio"
                      name="gender"
                      value="o"
                      id="others"
              />Others</label
              >
            </div>
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input
                    type="text"
                    class="form-control"
                    id="email"
                    name="email"
            />
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input
                    type="password"
                    class="form-control"
                    id="password"
                    name="password"
            />
          </div>
          <div class="form-group">
            <label for="number">Phone Number</label>
            <input
                    type="number"
                    class="form-control"
                    id="number"
                    name="number"
            />
          </div>
          <input type="submit" class="btn btn-primary" name="submit" />
        </form>
      </div>
      <div class="panel-footer text-right">
        <small>&copy;2023Villa4u</small>
      </div>
    </div>
  </div>
    `;
}
const createlog = () => {
    let container = document.querySelector('.container');

    container.innerHTML = `
         <div class="row col-md-6 col-md-offset-3">
    <div class="panel panel-primary">
      <div class="panel-heading text-center">
        <h1>Registration Form</h1>
      </div>
      <div class="panel-body">
        <form action="PHP/connect.php" method="post">
          
          <div class="form-group">
            <label for="email">Email</label>
            <input
                    type="text"
                    class="form-control"
                    id="email"
                    name="email"
            />
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input
                    type="password"
                    class="form-control"
                    id="password"
                    name="password"
            />
          </div>
          <input type="submit" class="btn btn-primary" name="submit" />
        </form>
      </div>
      <div class="panel-footer text-right">
        <small>&copy;2023Villa4u</small>
      </div>
    </div>
  </div>
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


const createHouse = () => {
    let container = document.querySelector('.container');

    container.innerHTML = `
         <div class="row col-md-6 col-md-offset-3">
    <div class="panel panel-primary">
      <div class="panel-heading text-center">
        <h1>Registration Form</h1>
      </div>
      <div class="panel-body">
        <form action="PHP/connect.php" method="post">
          
          <div class="form-group">
            <label for="email">Email</label>
            <input
                    type="text"
                    class="form-control"
                    id="email"
                    name="email"
            />
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input
                    type="password"
                    class="form-control"
                    id="password"
                    name="password"
            />
          </div>
          <input type="submit" class="btn btn-primary" name="submit" />
        </form>
      </div>
      <div class="panel-footer text-right">
        <small>&copy;2023Villa4u</small>
      </div>
    </div>
  </div>
      `;
}

