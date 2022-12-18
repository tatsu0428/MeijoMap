<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Register Cafeteria</title>
    </head>
    <body>
        <h1>Register Cafeteria</h1>
        <form action="/cafeterias" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="cafeteria_name">
                <h2>Cafeteria Name</h2>
                <input type="text" name="cafeteria_name" placeholder="食堂の名前"/>
            </div>
            
            <div class="map_id">
                <h2>Building Name</h2>
                <select name="map_id">
                    @foreach($maps as $map)
                        <option value="{{ $map->map_id }}">{{ $map->building_name }}</option>
                    @endforeach
                </select>
            </div>
            
            <div class="cafeteria_floor">
                <h2>Floor</h2>
                <select name="cafeteria_floor">
                    <option value="B1F">B1F</option>
                    <option value="1F">1F</option>
                    <option value="2F">2F</option>
                    <option value="3F">3F</option>
                    <option value="4F">4F</option>
                    <option value="5F">5F</option>
                    <option value="6F">6F</option>
                    <option value="7F">7F</option>
                    <option value="8F">8F</option>
                    <option value="9F">9F</option>
                    <option value="10F">10F</option>
                    <option value="11F">11F</option>
                    <option value="12F">12F</option>
                    <option value="13F">13F</option>
                    <option value="14F">14F</option>
                    <option value="15F">15F</option>
                </select>
            </div>
            
            <div class="image">
                <h2>Image</h2>
                <input type="file" name="image">
            </div>
            
            <div class="introduction">
                <h2>Introduction</h2>
                <textarea name="introduction" placeholder="紹介文を入力してください．"></textarea>
            </div>
            
            <div class="business_hours">
                <h2>Business Hours</h2>
                <label for="opening_time">開店時刻を入力</label>
                <input type="time" name="opening_time" id="opening_time">
                <label for="closing_time">閉店時刻を入力</label>
                <input type="time" name="closing_time" id="closing_time">
            </div>
            
            <div class="congestion_situation">
                <h2>Congestion Situation</h2>
                <select name="congestion_situation">
                    <option>空いている</option>
                    <option>混んでいる</option>
                    <option>満席</option>
                </select>
            </div>
            
            <input type="submit" value="store"/>
        </form>
        
        <div class="footer">
            <a href="/cafeterias/">戻る</a>
        </div>
        
    </body>
</html>