<div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <div class="labels">


        </div>
        <img src="http://internet-shop.tmweb.ru/storage/products/iphone_x.jpg" alt="iPhone X 64GB">
        <div class="caption">
            <h3>iPhone X 64GB</h3>
            <p>71990 ₽</p>
            <p>
            <form action="http://internet-shop.tmweb.ru/basket/add/1" method="POST">
                <a href="{{route('basket')}}" type="submit" class="btn btn-primary" role="button">В корзину</a>
                <a href=""
                   class="btn btn-default"
                   role="button">Подробнее</a>
                @isset($category->name)
                    {{$category->name}}
                @endisset
                <input type="hidden" name="_token" value="AYyGeHoYmv8cimZZIk9GzuNlT276ot7CdBhts6Rt"></form>
            </p>
        </div>
    </div>
</div>
