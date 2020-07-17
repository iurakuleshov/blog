@include('layouts.partials.head')

<body>

<header>
    <div class="container">
        <div class="row">
            <div class="menu-mob">
                <a class="hamb" onclick="openNav()"></a>
                <div id="mobMenuNav" class="sidenav">
                <span class="close-menu" onclick="closeNav()"><svg width="25" height="18" viewBox="0 0 17 16"
                                                                   fill="none"
                                                                   xmlns="http://www.w3.org/2000/svg">
                <path d="M1 1L16.5 16.5" stroke="#989898"/>
                <path d="M16.5 1L1 16.5" stroke="#989898"/>
            </svg></span>
                    <ul>
                        <li><a href="#">Парк машин</a></li>
                        <li><a href="#">Услуги</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Сотрудничество</a></li>
                        <li><a href="#">О нас</a></li>
                        <li><a href="#">Статьи</a></li>
                        <li><a href="#">Контакты</a></li>
                    </ul>
                    <div class="select-lang">
                        <div class="dropdown">
                            <button class="dropbtn lang">RU <i class="fa fa-chevron-down"></i></button>
                            <div class="dropdown-content">
                                <a href="#">EN</a>
                                <a href="#">KZ</a>
                            </div>
                        </div>
                    </div>
                    <div class="callback-header">
                        <a class="phone col-12" href="#">8 701 704 47 77</a>
                        <a class="mail col-12" href="mailto:transfer.global777@gmail.com"><span>transfer.global777@gmail.com</span></a>
                    </div>
                </div>
            </div>
            <div class="logo col-2">
                <a href="#">
                    <img src="images/logo.svg" alt="Global Transfer Аренда Авто">
                </a>
            </div>
            <div class="menu col-7">
                <nav class="navbar-expand-md navbar-light">
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a href="#">Парк машин</a>
                            </li>
                            <li class="nav-item dropdown" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <a href="#" class="dropdownToggle" id="usluginav">Услуги <i
                                            class="fa fa-chevron-down"></i></a>
                                <ul class="dropdown-menu" aria-labelledby="usluginav">
                                    <li><a href="#">Аренда авто</a></li>
                                    <li><a href="#">Аренда авто с водителем</a></li>
                                    <li><a href="#">Услуги переводчика</a></li>
                                    <li><a href="#">Услуги гида</a></li>
                                    <li><a href="#">Услуги телохранителя</a></li>
                                    <li><a href="#">Туры по Казахстану</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#">FAQ</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="dropdownToggle" href="#" id="sotrudnichestvonav" data-toggle="dropdown"
                                   aria-haspopup="true" aria-expanded="false">Сотрудничество <i
                                            class="fa fa-chevron-down"></i></a>
                                <ul class="dropdown-menu" aria-labelledby="sotrudnichestvonav">
                                    <li><a href="#">Аренда авто</a></li>
                                    <li><a href="#">Аренда авто с водителем</a></li>
                                    <li><a href="#">Услуги переводчика</a></li>
                                    <li><a href="#">Услуги гида</a></li>
                                    <li><a href="#">Услуги телохранителя</a></li>
                                    <li><a href="#">Туры по Казахстану</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#">О нас</a>
                            </li>
                            <li class="nav-item">
                                <a href="#">Статьи</a>
                            </li>
                            <li class="nav-item">
                                <a href="#">Контакты</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="callback-header col-2">
                <a class="phone" href="#">8 701 704 47 77</a>
                <a class="mail callback-btn" href="#"><span>Заказать звонок</span></a>
            </div>
            <div class="callback-header-mob callback-btn"></div>
            <div class="select-lang col-1">
                <div class="dropdown">
                    <button class="dropbtn lang">RU <i class="fa fa-chevron-down"></i></button>
                    <div class="dropdown-content">
                        <a href="#">EN</a>
                        <a href="#">KZ</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<main role="main">
    <!--Home Order Form-->
    <div class="render">
        <div class="container">
            <div class="info-text">
                <h1 class="title">Аренда авто по всему Казахстану</h1>
                <p class="description">с доставкой в любую точку города</p>
            </div>

            <div class="order-form">
                <ul class="nav nav-tabs justify-content-center" id="orderForm" role="tablist">
                    <li class="nav-item">
                        <a class="active" id="transfer-tab" data-toggle="tab" href="#transfer" role="tab"
                           aria-controls="transfer" aria-selected="true">Заказать трансфер</a>
                    </li>
                    <li class="nav-item">
                        <a class="" id="rentDriver-tab" data-toggle="tab" href="#rentDriver" role="tab"
                           aria-controls="rentDriver" aria-selected="false">Аренда авто с водителем</a>
                    </li>
                    <li class="nav-item">
                        <a class="" id="rentAuto-tab" data-toggle="tab" href="#rentAuto" role="tab"
                           aria-controls="rentAuto" aria-selected="false">Прокат автомобиля
                            <p>Только для Алматы</p>
                        </a>
                    </li>
                </ul>
                <div class="tab-content d-flex justify-content-center" id="orderFormContent">
                    <div class="tab-pane fade show active" id="transfer" role="tabpanel" aria-labelledby="transfer-tab">
                        <form action="" method="POST">
                            <div class="input-group">
                                <div class="input-block col-3">
                                    <label for="fromTransfer">Откуда</label>
                                    <input type="text" id="fromTransfer" name="from" placeholder="Город, улица, дом"
                                           class="form-control">
                                </div>
                                <div class="input-block col-3">
                                    <label for="toTransfer">Куда</label>
                                    <input type="text" id="toTransfer" name="from" placeholder="Город, улица, дом"
                                           class="form-control">
                                </div>
                                <div class="input-block datepicker-block col-3">
                                    <label for="dateTransfer">Дата</label><i class="fa fa-calendar"></i>
                                    <input type="text" id="dateTransfer" data-date-format="dd MM yyyy"
                                           autocomplete="off" name="from" placeholder="26 Ноябрь 2019"
                                           class="form-control datepicker-here">
                                </div>
                                <div class="input-block time col-2">
                                    <label for="timeTransfer">Время</label><i class="fa fa-clock-o"></i>
                                    <select class="time" id="timeTransfer" name="classRentDriver">
                                        <option value="0">00 : 00</option>
                                        <option value="1">01 : 00</option>
                                        <option value="2">02 : 00</option>
                                        <option value="3">03 : 00</option>
                                        <option value="4">04 : 00</option>
                                        <option value="5">05 : 00</option>
                                        <option value="6">06 : 00</option>
                                        <option value="7">07 : 00</option>
                                        <option value="8">08 : 00</option>
                                    </select>
                                </div>
                                <button type="submit" class="submit col-1">Далее</button>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="rentDriver" role="tabpanel" aria-labelledby="rentDriver-tab">
                        <form action="" method="POST">
                            <div class="input-group">
                                <div class="input-block col-3">
                                    <label for="fromRentDriver">Откуда</label>
                                    <input type="text" id="fromRentDriver" name="from" placeholder="Город, улица, дом"
                                           class="form-control">
                                </div>
                                <div class="input-block col-3">
                                    <label for="toRentDriver">Куда</label>
                                    <input type="text" id="toRentDriver" name="from" placeholder="Город, улица, дом"
                                           class="form-control">
                                </div>
                                <div class="input-block datepicker-block col-3">
                                    <label for="dateRentDrive">Дата</label><i class="fa fa-calendar"></i>
                                    <input type="text" id="dateRentDrive" autocomplete="off" name="from"
                                           placeholder="26 Ноябрь 2019"
                                           data-date-format="dd MM yyyy" class="form-control datepicker-here">
                                </div>
                                <div class="input-block time col-2">
                                    <label for="timeRentDriver">Время</label><i class="fa fa-clock-o"></i>
                                    <select class="time" id="timeRentDriver" name="classRentDriver">
                                        <option value="0">00 : 00</option>
                                        <option value="1">01 : 00</option>
                                        <option value="2">02 : 00</option>
                                        <option value="3">03 : 00</option>
                                        <option value="4">04 : 00</option>
                                        <option value="5">05 : 00</option>
                                        <option value="6">06 : 00</option>
                                        <option value="7">07 : 00</option>
                                        <option value="8">08 : 00</option>
                                    </select>
                                </div>
                                <button type="submit" class="submit col-1">Далее</button>
                            </div>
                            <div class="input-group">
                                <div class="input-block col-6">
                                    <label for="classRentDriver">Класс авто</label>
                                    <select id="classRentDriver" name="classRentDriver">
                                        <option value="0">Эконом</option>
                                        <option value="1">Стандарт</option>
                                        <option value="2">Внедорожники</option>
                                        <option value="3">Бизнес</option>
                                        <option value="4">Минивэн</option>
                                    </select>
                                </div>
                                <div class="input-block col-6">
                                    <label for="autoRentDriver">Предпочитаемая марка авто</label>
                                    <select id="autoRentDriver" name="autoRentDriver">
                                        <option value="0">Volkswagen</option>
                                        <option value="1">Toyota</option>
                                        <option value="2">BMW</option>
                                        <option value="3">Mercedes</option>
                                        <option value="4">Mitsubishi</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="rentAuto" role="tabpanel" aria-labelledby="rentAuto-tab">
                        <form action="" method="POST">
                            <div class="input-group">
                                <div class="input-block col-3">
                                    <label for="fromRentAuto">Откуда</label>
                                    <input type="text" id="fromRentAuto" name="from" placeholder="Город"
                                           class="form-control">
                                </div>
                                <div class="input-block col-3">
                                    <label for="toRentAuto"></label>
                                    <input type="text" id="toRentAuto" name="from" placeholder="Адрес"
                                           class="form-control">
                                </div>
                                <div class="input-block datepicker-block col-3">
                                    <label for="dateRentAuto">Дата</label><i class="fa fa-calendar"></i>
                                    <input type="text" id="dateRentAuto" autocomplete="off" name="from"
                                           placeholder="26 Ноябрь 2019"
                                           data-date-format="dd MM yyyy" class="form-control datepicker-here">
                                </div>
                                <div class="input-block time col-2">
                                    <label for="timeRentAuto">Время</label><i class="fa fa-clock-o"></i>
                                    <select class="time" id="timeRentAuto" name="classRentDriver">
                                        <option value="0">00 : 00</option>
                                        <option value="1">01 : 00</option>
                                        <option value="2">02 : 00</option>
                                        <option value="3">03 : 00</option>
                                        <option value="4">04 : 00</option>
                                        <option value="5">05 : 00</option>
                                        <option value="6">06 : 00</option>
                                        <option value="7">07 : 00</option>
                                        <option value="8">08 : 00</option>
                                    </select>
                                </div>
                                <button type="submit" class="submit col-1">Далее</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--Home Order Form-->
    <!--Car Park-->
    <div class="container park">
        <h3><span>Парк</span> машин</h3>
        <div class="row">
            <div class="park-info">
                <ul class="nav nav-tabs justify-content-center" id="parkInfo" role="tablist">
                    <li class="nav-item">
                        <a class="active" id="econom-tab" data-toggle="tab" href="#econom" role="tab"
                           aria-controls="econom" aria-selected="true">
                            <img src="images/cars/2010-volkswagen-jetta-s-sedan-side-view.png" alt="Эконом">
                            <strong>Эконом</strong>
                            <p>от 2530 тг/час</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="" id="standart-tab" data-toggle="tab" href="#standart" role="tab"
                           aria-controls="standart" aria-selected="false">
                            <img src="images/cars/image.png" alt="Стандарт">
                            <strong>Стандарт</strong>
                            <p>от 3640 тг/час</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="" id="jeep-tab" data-toggle="tab" href="#jeep" role="tab"
                           aria-controls="jeep" aria-selected="false">
                            <img src="images/cars/1c60888d6ca9485d5dd85c6ee9012bc8.png" alt="Внедорожник">
                            <strong>Внедорожник</strong>
                            <p>от 3640 тг/час</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="" id="business-tab" data-toggle="tab" href="#business" role="tab"
                           aria-controls="standart" aria-selected="false">
                            <img src="images/cars/85f131a2e644cea02bbaa6fbf3e400e6.png" alt="Бизнес">
                            <strong>Бизнес</strong>
                            <p>от 3640 тг/час</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="" id="sport-tab" data-toggle="tab" href="#sport" role="tab"
                           aria-controls="sport" aria-selected="false">
                            <img src="images/cars/Sedan-PNG-HD.png" alt="Sport car">
                            <strong>Sport car</strong>
                            <p>от 3640 тг/час</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="" id="minivan-tab" data-toggle="tab" href="#minivan" role="tab"
                           aria-controls="minivan" aria-selected="true">
                            <img src="images/cars/b.png" alt="Минивэн">
                            <strong>Минивэн</strong>
                            <p>от 2530 тг/час</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="" id="bminivan-tab" data-toggle="tab" href="#bminivan" role="tab"
                           aria-controls="bminivan" aria-selected="false">
                            <img src="images/cars/image 2.png" alt="Бизнес минивэн">
                            <strong>Бизнес минивэн</strong>
                            <p>от 3640 тг/час</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="" id="microbus-tab" data-toggle="tab" href="#microbus" role="tab"
                           aria-controls="microbus" aria-selected="false">
                            <img src="images/cars/image-1.png" alt="Микроавтобус">
                            <strong>Микроавтобус</strong>
                            <p>от 3640 тг/час</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="" id="bmicrobus-tab" data-toggle="tab" href="#bmicrobus" role="tab"
                           aria-controls="bmicrobus" aria-selected="false">
                            <img src="images/cars/image-2.png" alt="Бизнес микроавтобус">
                            <strong>Бизнес микроавтобус</strong>
                            <p>от 3640 тг/час</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="" id="bus-tab" data-toggle="tab" href="#bus" role="tab"
                           aria-controls="bus" aria-selected="false">
                            <img src="images/cars/image-3.png" alt="Автобус">
                            <strong>Автобус</strong>
                            <p>от 3640 тг/час</p>
                        </a>
                    </li>
                </ul>
                <div class="tab-content d-flex" id="parkInfoContent">
                    <div class="tab-pane fade show active" id="econom" role="tabpanel" aria-labelledby="econom-tab">
                        <div class="row">
                            <div class="col-6">
                                <img src="images/img.png" alt="Econom">
                            </div>
                            <div class="col-6 left-50">
                                <strong>Эконом</strong>
                                <div class="row">
                                    <div class="models col-4">
                                        <img src="images/models/image%207.png" alt="Kia">
                                        <span>Kia Cerato</span>
                                    </div>
                                    <div class="models col-4">
                                        <img src="images/models/image%208.png" alt="VW">
                                        <span>Volkswagen Jetta</span>
                                    </div>
                                    <div class="models col-4">
                                        <img src="images/models/image%209.png" alt="VW">
                                        <span>Hyundai Elantra</span>
                                    </div>
                                </div>
                                <ul class="advantages row">
                                    <li class="active col-6">
                                        <p>Встреча с аэропорта</p>
                                        <span>от 3550 тг</span>
                                    </li>
                                    <li class="col-6">
                                        <p>Автомобили класса C и выше </p>
                                        <span>не старше пяти лет</span>
                                    </li>
                                    <li class="col-6">
                                        <p>Без знаков такси</p>
                                        <span>и рекламы в салоне</span>
                                    </li>
                                    <li class="col-6">
                                        <p>Запрет на курение</p>
                                        <span>для водителей и пассажиров</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Car Park-->
    <!--Our Advantages-->
    <div class="our-advantages">
        <div class="container">
            <div class="row">
                <div class="col-5">
                    <h3>Почему <span>мы?</span></h3>
                    <p class="info">В отличие от такси, стоимость трансфера фиксирована — любой адрес в городе по одной
                        цене. Вы не платите за встречу с табличкой и провоз багажа. Даже если рейс задержали, мы
                        дождёмся вас бесплатно.</p>
                    <ul class="row">
                        <li>
                            <img src="images/icons/Group%2021.png" alt="Большой парк авто">
                            <p>Большой парк авто</p>
                        </li>
                        <li>
                            <img src="images/icons/Group%20101.png" alt="Переводчики и Гиды">
                            <p>Переводчики и Гиды</p>
                        </li>
                        <li>
                            <img src="images/icons/Group%2021.1.png" alt="Междугородние перевозки">
                            <p>Междугородние перевозки</p>
                        </li>
                        <li>
                            <img src="images/icons/Group%2021.11.png" alt="Встреча Бизнес делегаций, туристов">
                            <p>Встреча Бизнес делегаций, туристов</p>
                        </li>
                    </ul>
                </div>
                <div class="col-7 pad-0">
                    <img src="images/Group%207.1.jpg" alt="Global Transfer - Почему мы?">
                </div>
            </div>
        </div>
    </div>
    <!--Our Advantages-->
    <!--How we work-->
    <div class="how-we-work container">
        <h3>Как мы <span>работаем?</span></h3>
        <p class="info">Бронирование действительно просто и занимает всего несколько шагов</p>
        <div class="row">
            <div class="col-4">
                <img src="images/Mask%20Group.jpg" alt="Как мы работаем?">
                <strong>Отправление заявки</strong>
                <p>Выберите маршрут или количество часов, и класс автомобиля в зависимости от Ваших потребностей.</p>
            </div>
            <div class="col-4">
                <img src="images/Mask%20Group-1.jpg" alt="Как мы работаем?">
                <strong>Обратная связь</strong>
                <p>Мы обработаем вашу заявку, просчитаем стоимость и свяжемся с вами в кратчайшие сроки</p>
            </div>
            <div class="col-4">
                <img src="images/Mask%20Group-2.jpg" alt="Как мы работаем?">
                <strong>Оплата и бронирование</strong>
                <p>Вы производите оплату и получаете машину в то время которое вы пожелали</p>
            </div>
        </div>
    </div>
    <!--How we work-->
    <!--Collaboration-->
    <div class="our-advantages collaborating">
        <div class="container">
            <h3><span>Сотрудничество</span> с нами</h3>
            <div class="how-we-work row">
                <div class="col-7">
                    <div class="corporates">
                        <a href="#"><span>Корпоративным клиентам</span></a>
                        <p>Заказ трансфера для ваших посетителей вашего сервиса.
                        </p>
                        <p>Предложите трансфер при продаже
                            авиабилетов или бронировании номеров в отеле. </p>
                        <p>Все наши решения бесплатны для вас <br> Получайте
                            агентское вознаграждение</p>
                    </div>
                </div>
                <div class="col-5">
                    <div class="drivers">
                        <a href="#"><span>Водителям</span></a>
                        <p>Мы ищем автопарки, которые бы разделяли наше стремление к высокому качеству сервиса — тех,
                            кто готов стать лицом нашей компании.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Collaboration-->
    <!--About-->
    <div class="our-advantages about">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h3>О <span>компании</span></h3>
                    <strong>Мы организовываем трансферы в 120 странах <br> мира — из аэропорта, с вокзала, для
                        перемещения по
                        городу или между городами.</strong>
                    <p>Работаем так, чтобы ваш путь был комфортным и безопасным, а заказ на сайте — понятным и
                        быстрым.</p>
                    <p>В отличие от такси, стоимость трансфера фиксирована — любой адрес в городе по одной цене. Вы не
                        платите за встречу с табличкой и провоз багажа. Даже если рейс задержали, мы дождёмся вас
                        бесплатно.</p>
                    <p>Заказать поездку можно на этом сайте и автомобиль прибудет к запланированной минуте.</p>
                    <p>Нам доверяют те, кому нужна полная определенность с трансфером — люди в командировке, компании,
                        туристические агентства и частные путешественники.
                    </p>
                    <a href="#">Ответы на вопросы</a>
                </div>
                <div class="col-6">
                    <img src="images/chauffeur-service-14.jpg" alt="Global Transfer - О компании">
                </div>
            </div>
        </div>
    </div>
    <!--About-->
    <!--Articles-->
    <div class="articles container">
        <h3><span>Статьи</span></h3>
        <div class="row">
            <div class="col-3">
                <a href="#"><img src="images/posts/Mask%20Group.jpg" alt=""></a>
                <a class="title" href="#">Условия на аренду авто в Алматы без водителя</a>
                <p class="excerpt">Также, при оформлении аренды автомобилей, необходимо предъявить водительское...</p>
                <p class="date">11.09.19</p>
            </div>
            <div class="col-3">
                <a href="#"><img src="images/posts/Mask%20Group-22.jpg" alt=""></a>
                <a class="title" href="#">Как можно уехать с нестандартным багажом?</a>
                <p class="excerpt">Также, при оформлении аренды автомобилей, необходимо предъявить водительское...</p>
                <p class="date">11.09.19</p>
            </div>
            <div class="col-3">
                <a href="#"><img src="images/posts/Mask%20Group.jpg" alt=""></a>
                <a class="title" href="#">Условия на аренду авто в Алматы без водителя</a>
                <p class="excerpt">Также, при оформлении аренды автомобилей, необходимо предъявить водительское...</p>
                <p class="date">11.09.19</p>
            </div>
            <div class="col-3">
                <a href="#"><img src="images/posts/Mask%20Group-22.jpg" alt=""></a>
                <a class="title" href="#">Как можно уехать с нестандартным багажом?</a>
                <p class="excerpt">Также, при оформлении аренды автомобилей, необходимо предъявить водительское...</p>
                <p class="date">11.09.19</p>
            </div>
        </div>
    </div>
    <!--Articles-->

</main>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-3 copyright-block">
                <a class="logo" href="#">
                    <img src="images/logo-white.svg" alt="Global Transfer Аренда авто">
                </a>
                <p class="copyright">© Copyright 2019 GlobalTransfer</p>
                <p class="developers">Разработка и продвижение компания <a href="#">IMarketing</a></p>
            </div>
            <div class="col-4 terms-block">
                <p>Чтобы завоевать лидирующие позиции на рынке проката авто в Казахстане, мы постоянно
                    совершенствуемся.</p>
                <p>Если вы хотите помочь нам стать еще лучше, присылайте ваши отзывы и предложения.</p>
                <a class="terms terms-btn"><span>Пользовательское соглашение</span></a>
            </div>
            <div class="col-2 menu-block">
                <strong>Меню</strong>
                <ul>
                    <li><a href="#">Автомобили</a></li>
                    <li><a href="#">Услуги</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">О нас</a></li>
                    <li><a href="#">Статьи</a></li>
                    <li><a href="#">Контакты</a></li>
                </ul>
            </div>
            <div class="col-2 contacts-block">
                <strong>Контакты</strong>
                <ul>
                    <li><span>Телефон</span>
                        <a href="#">8 701 704 47 77</a>
                    </li>
                    <li><span>E-mail</span>
                        <a href="#">info@globaltransfer.kz</a>
                    </li>
                    <li><span>Адрес</span>
                        <a href="#">г. Алматы. ул. Пример, 37, 4 этаж</a>
                    </li>
                </ul>
            </div>
            <div class="col-2 socials-block">
                <a class="telegram" href="#"><span class="icon-telegram"></span>Мы в Telegram</a>
                <a class="instagram" href="#"><span class="icon-instagram"></span>Мы в Instagram</a>
                <a class="facebook" href="#"><span class="icon-facebook"></span>Мы в Facebook</a>
            </div>
            <div class="copyright-mob justify-content-center">
                <p class="copyright">© Copyright 2019 GlobalTransfer</p>
                <p class="developers">Разработка и продвижение компания <a href="#">IMarketing</a></p>
            </div>
        </div>
    </div>
</footer>

<div class="popup popup-thank-you">
    <div class="popup-wrapper">
        <div class="popup-order-call-img">
            <div class="img">
                <img src="images/callback.jpg" alt="Заказать обратный звонок">
            </div>
        </div>
        <div class="container">
            <div class="popup-order-call-right">
                <div class="popup-thank-you-heading">
                    Спасибо за заявку!
                </div>
                <div class="popup-thank-you-sub-heading">
                    Вас автоматически перенесет на главную страницу через 3 секунды
                </div>
                <a class="popup-thank-you-home-btn" href="#">На главную</a>
            </div>
        </div>
        <div class="close-popup">
            <svg width="25" height="18" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 1L16.5 16.5" stroke="#989898"/>
                <path d="M16.5 1L1 16.5" stroke="#989898"/>
            </svg>

        </div>
    </div>
</div>
<div class="popup popup-order-call">
    <div class="popup-wrapper">
        <div class="popup-order-call-img">
            <div class="img">
                <img src="images/callback.jpg" alt="Заказать обратный звонок">
            </div>
        </div>
        <div class="container">
            <div class="popup-order-call-right">
                <div class="popup-order-call-heading">
                    <span>Закажите звонок</span> и мы ответим в кратчайшие сроки
                </div>
                <div class="popup-order-call-form">
                    <form>
                        <label>
                            <span>Введите ваше имя *</span>
                            <input type="text" placeholder="Иван Иванович" required>
                        </label>
                        <label>
                            <span>Введите ваш телефон *</span>
                            <input type="tel" placeholder="+7 ( ___ ) ___ - __ - __" required>
                        </label>
                        <span>Услуга которая вас интересует</span>
                        <select class="modal-select" name="serviceType">
                            <option value="0">Аренда авто</option>
                            <option value="1">Аренда авто с водителем</option>
                            <option value="2">Услуги переводчика</option>
                            <option value="3">Услуги гида</option>
                            <option value="4">Услуги телохранителя</option>
                            <option value="4">Туры по Казахстану</option>
                        </select>
                        <input type="submit" class="btn-orange" value="Отправить заявку">
                    </form>
                </div>
            </div>
        </div>
        <div class="close-popup">
            <svg width="25" height="18" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 1L16.5 16.5" stroke="#989898"/>
                <path d="M16.5 1L1 16.5" stroke="#989898"/>
            </svg>
        </div>
    </div>
</div>
<div id="modalRights" class="modal">
    <!-- Modal content -->
    <div class="modal-content popup-rights">
        <span class="close close-rights"><svg width="25" height="18" viewBox="0 0 17 16" fill="none"
                                              xmlns="http://www.w3.org/2000/svg">
                <path d="M1 1L16.5 16.5" stroke="#989898"/>
                <path d="M16.5 1L1 16.5" stroke="#989898"/>
            </svg></span>
        <div class="popup-rights-full">
            <div class="popup-rights-heading">
                Права и обязанности Сторон
            </div>
            <div class="popup-rights-content">
                <p>Самостоятельно определять марки транспортных средств класса для выполнения заказов.<br> В случае
                    заказа
                    транспортных средств других классов определяют марки транспортных средств совместно.</p>
                <p>
                    Производить перерасчёт стоимости предоставленных услуг в связи с изменением маршрута поездки при
                    соблюдении
                    одного из следующих условий:</p>
                <p>— При заказе транспортного средства в аренду.<br>
                    — При отсутствии фиксированного маршрута исполнения заказа.<br>
                    — После согласования изменений маршрута поездки с Заказчиком.
                </p>
                <p>
                    Изменения маршрута поездки фиксируются водителем в маршрутном листе по окончании
                    поездки.<br>Если изменение программы поездок не было согласовано с Заказчиком, либо не было
                    внесено в
                    маршрутный лист, Заказчик имеет право не оплачивать оказанные услуги.<br>Исполнитель
                    обязуется:<br>
                    Выполнять услуги трансфера в соответствии с пунктом <br>Выполнять требования к транспортным
                    средствам и
                    водителям, указанные в Главе 4 настоящего Договора.<br> Соблюдать процедуры работы с заказами и
                    запросами, указанные в Главах 3 настоящего Договора.<br> Своевременно уведомлять Заказчика обо
                    всех
                    непредвиденных обстоятельствах, связанных с исполнением настоящего договора, в том числе
                    нарушении
                    требований по обслуживанию клиентов.<br> Осуществлять замену вышедшего из строя транспортного
                    средства в
                    течение 1 часа в черте города и в течение 3 часов за его пределами, а также сообщить о проблеме
                    Заказчику.<br> В течение 8 часов рассматривать и предоставлять ответ по всем претензионным
                    обращениям
                    Заказчика, связанным с качеством оказываемых услуг.<br> Исполнитель предоставляет бесплатное
                    ожидания
                    для клиента после посадки самолета в аэропорту в зоне приема багажа в течении не менее одного
                    часа.<br>
                    Исполнителем отслеживаются рейсы, которым пользуется клиенты.<br> Если рейс задерживается,
                    трансфер
                    должен был организован без дополнительной оплаты Заказчиком.<br> Исполнитель попвещает Заказчика
                    о
                    задержке рейса. <br>В случае отсутствия полной информации о трансфере в заявке предоставляемой
                    Заказчиком, Исполнитель обязуется заблаговременно сообщить об этом Заказчику и запросить
                    недостающую
                    информацию. В случае неоказания трансферных услуг вследствие отсутствия полной информации в
                    заявке и
                    если Заказчик не был заблаговременно информирован об этом, Заказчик имеет право не оплачивать
                    данный
                    трансфер.</p>
                <p>Заказчик обязуется:<br> Указывать при заказе услуги трансфера полные сведения, а именно город
                    исполнения услуг, дату и время подачи транспортных средств, пункты отправления и назначения, тип
                    услуг (аренда и/или трансфер), класс транспортного средства, текст таблички, ФИО клиента и номер
                    телефона, номер авиарейса, номер поезда и вагона.<br>Использовать транспортное средство по
                    назначению в
                    соответствии с Заказом и в рамках лимита выделенного времени.<br>Не требовать от водителя
                    совершения
                    действий, противоречащих правилам дорожного движения и законодательству. <br>Соблюдать
                    целостность
                    транспортного средства, а так же порядок и чистоту в транспортном средстве, не допускать порчу
                    имущества Исполнителя на протяжении всего времени выполнения заказа.</p>
            </div>
        </div>
    </div>

</div>
<div id="modalTerms" class="modal">
    <!-- Modal content -->
    <div class="modal-content popup-rights">
        <span class="close close-terms"><svg width="25" height="18" viewBox="0 0 17 16" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                <path d="M1 1L16.5 16.5" stroke="#989898"/>
                <path d="M16.5 1L1 16.5" stroke="#989898"/>
            </svg></span>
        <div class="popup-rights-full">
            <div class="popup-rights-heading">
                Пользовательское соглашение
            </div>
            <div class="popup-rights-content">
                <p>Самостоятельно определять марки транспортных средств класса для выполнения заказов.<br> В случае
                    заказа
                    транспортных средств других классов определяют марки транспортных средств совместно.</p>
                <p>
                    Производить перерасчёт стоимости предоставленных услуг в связи с изменением маршрута поездки при
                    соблюдении
                    одного из следующих условий:</p>
                <p>— При заказе транспортного средства в аренду.<br>
                    — При отсутствии фиксированного маршрута исполнения заказа.<br>
                    — После согласования изменений маршрута поездки с Заказчиком.
                </p>
                <p>
                    Изменения маршрута поездки фиксируются водителем в маршрутном листе по окончании
                    поездки.<br>Если изменение программы поездок не было согласовано с Заказчиком, либо не было
                    внесено в
                    маршрутный лист, Заказчик имеет право не оплачивать оказанные услуги.<br>Исполнитель
                    обязуется:<br>
                    Выполнять услуги трансфера в соответствии с пунктом <br>Выполнять требования к транспортным
                    средствам и
                    водителям, указанные в Главе 4 настоящего Договора.<br> Соблюдать процедуры работы с заказами и
                    запросами, указанные в Главах 3 настоящего Договора.<br> Своевременно уведомлять Заказчика обо
                    всех
                    непредвиденных обстоятельствах, связанных с исполнением настоящего договора, в том числе
                    нарушении
                    требований по обслуживанию клиентов.<br> Осуществлять замену вышедшего из строя транспортного
                    средства в
                    течение 1 часа в черте города и в течение 3 часов за его пределами, а также сообщить о проблеме
                    Заказчику.<br> В течение 8 часов рассматривать и предоставлять ответ по всем претензионным
                    обращениям
                    Заказчика, связанным с качеством оказываемых услуг.<br> Исполнитель предоставляет бесплатное
                    ожидания
                    для клиента после посадки самолета в аэропорту в зоне приема багажа в течении не менее одного
                    часа.<br>
                    Исполнителем отслеживаются рейсы, которым пользуется клиенты.<br> Если рейс задерживается,
                    трансфер
                    должен был организован без дополнительной оплаты Заказчиком.<br> Исполнитель попвещает Заказчика
                    о
                    задержке рейса. <br>В случае отсутствия полной информации о трансфере в заявке предоставляемой
                    Заказчиком, Исполнитель обязуется заблаговременно сообщить об этом Заказчику и запросить
                    недостающую
                    информацию. В случае неоказания трансферных услуг вследствие отсутствия полной информации в
                    заявке и
                    если Заказчик не был заблаговременно информирован об этом, Заказчик имеет право не оплачивать
                    данный
                    трансфер.</p>
                <p>Заказчик обязуется:<br> Указывать при заказе услуги трансфера полные сведения, а именно город
                    исполнения услуг, дату и время подачи транспортных средств, пункты отправления и назначения, тип
                    услуг (аренда и/или трансфер), класс транспортного средства, текст таблички, ФИО клиента и номер
                    телефона, номер авиарейса, номер поезда и вагона.<br>Использовать транспортное средство по
                    назначению в
                    соответствии с Заказом и в рамках лимита выделенного времени.<br>Не требовать от водителя
                    совершения
                    действий, противоречащих правилам дорожного движения и законодательству. <br>Соблюдать
                    целостность
                    транспортного средства, а так же порядок и чистоту в транспортном средстве, не допускать порчу
                    имущества Исполнителя на протяжении всего времени выполнения заказа.</p>
            </div>
        </div>
    </div>

</div>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<link href="css/nice-select.css" rel="stylesheet">
<link href="css/datepicker.min.css" rel="stylesheet">

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/datepicker.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>
