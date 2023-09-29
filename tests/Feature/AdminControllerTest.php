<?php

namespace Tests\Feature;

use App\Models\Admin;
use App\Models\AdminPermission;
use App\Models\Permission;
use App\Models\Role;
use App\Models\RoleAdmin;
use Database\Seeders\FeatureTestSetUpSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Pagination\LengthAwarePaginator;
use Tests\TestCase;

/**
 * 管理者コントローラーテスト
 *
 * コマンド実行する場合はプロジェクトのルートディレクトリ上で実行すること
 * $ vendor/bin/phpunit tests/Feature/AdminControllerTest.php
 */
class AdminControllerTest extends TestCase
{
    use RefreshDatabase;

    // ログインに使用する管理者情報
    protected $adminUser;
    // スタブで利用する役割情報
    private $roles;
    // スタブで利用する権限情報
    private $permissions;

    public function setUp(): void
    {
        parent::setUp();
        // Controllerのテスト用のシーダクラスを実行
        $this->seed(FeatureTestSetUpSeeder::class);
        // ファクトリークラスを使用し管理者情報を登録、取得
        $this->adminUser = Admin::factory()->create()->first();
        // 役割と権限情報を紐づける
        AdminPermission::factory()->create(['user_id' => $this->adminUser->id]);
        RoleAdmin::factory()->create(['user_id' => $this->adminUser->id]);

        // ファクトリークラスを使用し役割・権限情報の生成
        $this->roles = [Role::factory()->make()];
        $this->permissions = [Permission::factory()->make()];
    }

    /**
     * 管理者一覧画面を正しく表示できた場合のテスト
     */
    public function test_管理者一覧表示画面の検証()
    {
        // スタブの設定

        // 期待値の設定

        // 認証済ユーザーの指定とhttpメソッドとパスの指定し、実行

        // 検証

    }

    /**
     * 管理者詳細画面を正しく表示できた場合のテスト
     */
    public function test_管理者詳細画面の検証()
    {

    }


    /**
     * 管理者新規登録画面を正しく表示できた場合のテスト
     */
    public function test_管理者新規登録画面の検証()
    {

    }

    /**
     * 管理者新規登録処理を正しくできた場合のテスト
     */
    public function test_管理者新規登録処理の検証()
    {
        // スタブの設定


        // 認証済ユーザーの指定とhttpメソッドとパスの指定し、実行
        $response = $this->actingAs($this->adminUser, 'admins')
            ->post(route('admin.create'), [
                'userId' => 'dummy',
                'userName' => 'dummy',
                'password' => 'dummy',
                'adminRoles' => [1],
                'adminPermissions' => [1],
            ]);

        // 検証
    }

    /**
     * 管理者編集画面を正しく表示できた場合のテスト
     */
    public function test_管理者編集画面の検証()
    {

    }

    /**
     * 管理者更新処理を正しくできた場合のテスト
     */
    public function test_管理者更新処理の検証()
    {

    }

    /**
     * 管理者削除処理を正しくできた場合のテスト
     */
    public function test_管理者削除処理の検証()
    {

    }
}
