@extends('layout')
@section('content')
<main role="main">
    <!--Car Park-->
    <div class="clients-page">
        <div class="park">
            <div class="container">
                <h3><span>Водителям</span></h3>
                <div class="breadcrumbs">
                    <ul>
                        <li><a href="#">Главная</a></li>
                        <li class="arrow"><span class="fa fa-angle-right"></span></li>
                        <li class="current"><span>Водителям</span></li>
                    </ul>
                </div>
            </div>
            <div class="clients-content">
                <div class="container-fluid">
                    <img src="images/drivers.jpg" alt="Global Transfer - For Drivers">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <div class="order-form">
                                <form action="" method="POST">
                                    <input type="text" name="name" class="form-control" required
                                           placeholder="Имя и фамилия">
                                    <input type="tel" name="phone" class="form-control" required placeholder="Телефон">
                                    <input type="text" name="country" class="form-control" placeholder="Страна">
                                    <input type="text" name="city" class="form-control" placeholder="Город">
                                    <select name="model" class="form-control">
                                        <option value="0">Марка Автомобиля</option>
                                        <option value="1">Volkswagen</option>
                                        <option value="2">Mazda</option>
                                        <option value="3">Audi</option>
                                        <option value="4">Mercedes</option>
                                        <option value="5">Toyota</option>
                                        <option value="6">Kia</option>
                                        <option value="7">Honda</option>
                                        <option value="8">Hyundai</option>
                                    </select>
                                    <select name="color" class="form-control">
                                        <option value="0">Цвет автомобиля</option>
                                        <option value="1">Красный</option>
                                        <option value="2">Белый</option>
                                        <option value="3">Черный</option>
                                        <option value="4">Серый</option>
                                        <option value="5">Зеленый</option>
                                        <option value="6">Желтый</option>
                                        <option value="7">Розовый</option>
                                        <option value="8">Синий</option>
                                    </select>
                                    <button class="faq-btn" type="submit">Отправить</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="rules">
                                <h3>Зарабатывайте с нами!</h3>
                                <p>Наши основные клиенты — это деловые люди, отправившиеся в командировку. Они
                                    предъявляют
                                    высокие требования к уровню обслуживания и мы делаем всё, чтобы оправдать их
                                    ожидания.</p>
                                <p> Для
                                    такой работы мы ищем водителей, которые бы разделяли наше стремление к высокому
                                    качеству
                                    сервиса — тех, кто готов стать лицом нашей компании.</p>
                                <strong> Обязательно соблюдение наших
                                    стандартов:</strong>
                                <ul>
                                    <li>Водитель одет в соответствии с повседневным деловым стилем</li>
                                    <li>Водитель встречает клиента с табличкой и предлагает помощь с багажом</li>
                                    <li>К клиенту водитель обращается уважительно, соблюдает такт и не навязывает
                                        разговор
                                    </li>
                                    <li>Автомобиль без наклеек на борту и прочих признаков такси, чистый
                                        снаружи и внутри независимо от погодных условий
                                    </li>
                                    <li>В автомобиле запрещено курение</li>
                                    <li>Водитель неукоснительно соблюдает все требования по безопасности, включая
                                        обязательное использование
                                        ремней безопасности как для себя, так и для пассажира
                                    </li>
                                    <li>Водитель ведёт автомобиль спокойно и
                                        уверенно, соблюдая ПДД и скоростной режим
                                    </li>
                                    <li>Музыка в автомобиле только по желанию клиента</li>
                                    <li>Во время поездки водитель не разговаривает по телефону, если это не требуется
                                        для
                                        решения вопросов по
                                        текущей поездке.
                                    </li>
                                    <li>По завершению поездки водитель заполняет маршрутный лист и заверяет его подписью
                                        клиента
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
</main>
@endsection