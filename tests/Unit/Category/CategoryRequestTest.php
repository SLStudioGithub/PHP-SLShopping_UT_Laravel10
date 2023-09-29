<?php

namespace Tests\Unit\Category;

use App\http\Requests\CategoryRequest;
use Illuminate\Support\Facades\Validator;
use Tests\TestCase;

/**
 * カテゴリーリクエストテスト
 *
 * コマンド実行する場合はプロジェクトのルートディレクトリ上で実行すること
 * $ ./vendor/bin/phpunit ./tests/Unit/Category/CategoryRequestTest.php
 */
class CategoryRequestTest extends TestCase
{

    /**
     * 概要 カテゴリー名の入力チェック
     * 条件 カテゴリー名が1文字の場合
     * 結果 trueを返すこと
     */
    public function test_カテゴリー名が1文字の場合trueを返すこと()
    {

    }

    /**
     * 概要 カテゴリー名の入力チェック
     * 条件 カテゴリー名が20文字の場合
     * 結果 trueを返すこと
     */
    public function test_カテゴリー名が20文字の場合trueを返すこと()
    {

    }

    /**
     * 概要 カテゴリー名の入力チェック
     * 条件 カテゴリー名が0文字の場合
     * 結果 falseを返すこと
     */
    public function test_カテゴリー名が0文字の場合falseを返すこと()
    {

    }

    /**
     * 概要 カテゴリー名の入力チェック
     * 条件 カテゴリー名が21文字の場合
     * 結果 falseを返すこと
     */
    public function test_カテゴリー名が21文字の場合falseを返すこと()
    {

    }
}
