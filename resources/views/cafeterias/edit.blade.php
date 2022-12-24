<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Edit Cafeteria</title>
    </head>
    <body>
        <h1>Edit Cafeteria</h1>
        <form action="/cafeterias/{{ $cafeteria->cafeteria_id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <div class="cafeteria_name">
                <h2>Cafeteria Name</h2>
                <input type="text" name="cafeteria_name" value="{{ $cafeteria->cafeteria_name }}"/>
            </div>
            
            <div class="map_id">
                <h2>Building Name</h2>
                <select name="map_id">
                    @foreach($maps as $map)
                        @if ($map->map_id == $cafeteria->map_id)
                            <option value="{{ $map->map_id }}" selected>{{ $map->building_name }}</option>
                        @else
                            <option value="{{ $map->map_id }}">{{ $map->building_name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            
            <div class="cafeteria_floor">
                <h2>Floor</h2>
                <select name="cafeteria_floor">
                    @for ($i = 0; $i < 16; $i++)
                        @if ($i == 0)
                            @if ($cafeteria->floor == "B1F")
                                <option selected>B1F</option>
                            @else
                                <option>B1F</option>
                            @endif
                        @else
                            @if ($cafeteria->floor == ($i . "F"))
                                
                                <option selected>{{$i . "F"}}</option>
                            @else
                                <option>{{$i . "F"}}</option>
                            @endif
                        @endif
                    @endfor
                </select>
            </div>
            
            <div class="image">
                <h2>Image</h2>
                <input type="file" name="image">
            </div>
            
            <div class="introduction">
                <h2>Introduction</h2>
                <textarea name="introduction">{{ $cafeteria->introduction }}</textarea>
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
            <a href="/cafeterias/{{ $cafeteria->cafeteria_id }}">戻る</a>
        </div>
        
    </body>
</html>