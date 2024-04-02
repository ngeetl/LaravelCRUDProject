## 3/27
- "php artisan make:Controller 이름 --resource"
- Controller를 생성해 web 라우터에 연결
- name()을 통해 Router 별칭 생성 => blade에서 route('별칭')으로 사용
- route(별칭, 파라미터, 절대/상대 경로)
- @yield, @extends, @section, @forEach, @if 사용
- view() 두번째 인자로 데이터 전달
- self:: 자신을 가리킴
- Route::get() 두번째 인자를 클로저라고 부름
- Route::resource(리소스 이름, 컨트롤러) RESTful 리소스 컨트롤러를 라우팅, URI와 컨트롤러의 액션을 자동으로 매핑

## 3/28
- array_search('찾을값', 대상배열): 찾는 대상이 몇번 째에 있는지
- arry_column(배열, '컬럼명'): 컬럼명으로 새로운 배열을 만듦
- route()로 컨트롤러의 액션을 실행시키고 id 파라미터를 넘김
- Route::resource를 사용하는 경우, 리소스 이름을 기반으로 파라미터 이름을 자동으로 결정

## 4/2
- "php artisan make:model Model --migration"
- 데이터베이스 연결 설정은 ".env", "config/database.php"