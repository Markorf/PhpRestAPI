<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit09e8986dc4f3d8926dfbe1fd147a7f41
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MobileShop\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MobileShop\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'MobileShop\\API\\Controllers\\BaseController' => __DIR__ . '/../..' . '/app/API/MobileShop.API.Controllers/BaseController.php',
        'MobileShop\\BLL\\Services\\Implementation\\MobileService' => __DIR__ . '/../..' . '/app/BLL/MobileShop.BLL.Services.Implementation/MobileService.php',
        'MobileShop\\BLL\\Services\\Implementation\\UserService' => __DIR__ . '/../..' . '/app/BLL/MobileShop.BLL.Services.Implementation/UserService.php',
        'MobileShop\\BLL\\Services\\Interfaces\\IMobileService' => __DIR__ . '/../..' . '/app/BLL/MobileShop.BLL.Services.Interfaces/IMobileService.php',
        'MobileShop\\BLL\\Services\\Interfaces\\IUserService' => __DIR__ . '/../..' . '/app/BLL/MobileShop.BLL.Services.Interfaces/IUserService.php',
        'MobileShop\\DAL\\Repositories\\DbService\\Implementation\\DbConnectionService' => __DIR__ . '/../..' . '/app/DAL/MobileShop.DAL.Repositories.DbServices.Implementation/DbConnectionService.php',
        'MobileShop\\DAL\\Repositories\\DbService\\Implementation\\DbService' => __DIR__ . '/../..' . '/app/DAL/MobileShop.DAL.Repositories.DbServices.Implementation/DbService.php',
        'MobileShop\\DAL\\Repositories\\DbService\\Interfaces\\IDbConnectionService' => __DIR__ . '/../..' . '/app/DAL/MobileShop.DAL.Repositories.DbService.Interfaces/IDbConnectionService.php',
        'MobileShop\\DAL\\Repositories\\DbService\\Interfaces\\IDbService' => __DIR__ . '/../..' . '/app/DAL/MobileShop.DAL.Repositories.DbService.Interfaces/IDbService.php',
        'MobileShop\\DAL\\Repositories\\Repository\\Implementation\\MobileDAL' => __DIR__ . '/../..' . '/app/DAL/MobileShop.DAL.Repositories.Repository.Implementation/MobileDAL.php',
        'MobileShop\\DAL\\Repositories\\Repository\\Implementation\\UserDAL' => __DIR__ . '/../..' . '/app/DAL/MobileShop.DAL.Repositories.Repository.Implementation/UserDAL.php',
        'MobileShop\\DAL\\Repositories\\Repository\\Interfaces\\IMobileDAL' => __DIR__ . '/../..' . '/app/DAL/MobileShop.DAL.Repositories.Repository.Interfaces/IMobileDAL.php',
        'MobileShop\\DAL\\Repositories\\Repository\\Interfaces\\IUserDAL' => __DIR__ . '/../..' . '/app/DAL/MobileShop.DAL.Repositories.Repository.Interfaces/IUserDAL.php',
        'MobileShop\\Root\\ApplicationConfig\\Core' => __DIR__ . '/../..' . '/app/Root/MobileShop.Root.ApplicationConfig/Core.php',
        'MobileShop\\Shared\\Configs\\Constants' => __DIR__ . '/../..' . '/app/Shared/MobileShop.Shared.Configs/Constants.php',
        'MobileShop\\Shared\\Helpers\\HelperClass' => __DIR__ . '/../..' . '/app/Shared/MobileShop.Shared.Helpers/HelperClass.php',
        'MobileShop\\Shared\\Models\\Implementation\\Mobile' => __DIR__ . '/../..' . '/app/Shared/MobileShop.Shared.Models.Implementation/Mobile.php',
        'MobileShop\\Shared\\Models\\Implementation\\User' => __DIR__ . '/../..' . '/app/Shared/MobileShop.Shared.Models.Implementation/User.php',
        'MobileShop\\Shared\\Models\\Interfaces\\IMobile' => __DIR__ . '/../..' . '/app/Shared/MobileShop.Shared.Models.Interfaces/IMobile.php',
        'MobileShop\\Shared\\Models\\Interfaces\\IUser' => __DIR__ . '/../..' . '/app/Shared/MobileShop.Shared.Models.Interfaces/IUser.php',
        'MobileShop\\Shared\\Services\\MobileShopServices' => __DIR__ . '/../..' . '/app/Shared/MobileShop.Shared.Services/MobileShopServices.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit09e8986dc4f3d8926dfbe1fd147a7f41::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit09e8986dc4f3d8926dfbe1fd147a7f41::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit09e8986dc4f3d8926dfbe1fd147a7f41::$classMap;

        }, null, ClassLoader::class);
    }
}
