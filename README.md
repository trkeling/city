
### 文件迁移
```
php artisan vendor:publish --provider="Keling\City\CityServiceProvider"
```

### 数据库迁移
```
php artisan migrate
```

### 更新composer
```
composer dump-autoload
```

### 数据添加
```
根目录的 tr_area 文件是sql语句,复制到命令行写入
```

### 使用方法
```

use Keling\City\Repositories\CityRepository;

class TestController extends Controller
{

    public $CityRepository;

    public function __construct(CityRepository $cityRepository)
    {
        $this->CityRepository = $cityRepository;
    }

    public function test(){
        // 第一个参数是(层级 1省 2市 3区县)
        // 第二个参数是(父id)
        $data = $this->CityRepository->allCitys(3, 20);
        dd($data);
    }
}

```

### 配置
```
'Redis' => true // true 开始redis缓存  false 开启
```