<?php
namespace Tests\Unit\app\Http\Controllers;

use Blog\Article;
use Blog\Category;
use Blog\Http\Controllers\HomeController;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\View\View;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Tests\TestCase;

class HomeControllerTest extends TestCase
{
    public function testIndex()
    {
            $collection = $this->getMockBuilder(Collection::class)
                ->disableOriginalConstructor()
                ->setMethods(['paginate'])
                ->getMock();
            $collection->expects($this->once())->method('paginate');

            $article = $this->getMockBuilder(Article::class)
                ->disableOriginalConstructor()
                ->setMethods(['orderBy'])
                ->getMock();
            $article->expects($this->once())->method('orderBy')->willReturn($collection);

            /** @var HomeController $controller */
            $controller = $this->getMockBuilder(HomeController::class)
                ->disableOriginalConstructor()
                ->setMethods()
                ->getMock();

            $this->assertInstanceOf(View::class, $controller->index($article));
    }

    public function testCategoryException()
    {
        $category = $this->getMockBuilder(Category::class)
            ->disableOriginalConstructor()
            ->setMethods(['where'])
            ->getMock();
        $category->expects($this->once())->method('where')->willReturn(new class{
            public function first()
            {
                return false;
            }
        });

        /** @var HomeController $controller */
        $controller = $this->getMockBuilder(HomeController::class)
            ->disableOriginalConstructor()
            ->setMethods()
            ->getMock();

        $this->expectException(NotFoundHttpException::class);

        $controller->category($category, 'test');
    }

    public function testCategory()
    {
        $articlesCollection = $this->getMockBuilder(Collection::class)
            ->disableOriginalConstructor()
            ->setMethods(['paginate'])
            ->getMock();
        $articlesCollection->expects($this->once())->method('paginate');

        $category = $this->getMockBuilder(Category::class)
            ->disableOriginalConstructor()
            ->setMethods(['where', 'articles'])
            ->getMock();
        $category->expects($this->once())->method('articles')->willReturn($articlesCollection);
        $category->expects($this->once())->method('where')->willReturn(new class ($category) {
            protected $model;
            public function __construct($model)
            {
                $this->model = $model;
            }
            public function first()
            {
                return $this->model;
            }
        });

        /** @var HomeController $controller */
        $controller = $this->getMockBuilder(HomeController::class)
            ->disableOriginalConstructor()
            ->setMethods()
            ->getMock();

        $this->assertInstanceOf(View::class, $controller->category($category, 'test'));
    }

    public function testArticleException()
    {
        $model = $this->getMockBuilder(Article::class)
            ->disableOriginalConstructor()
            ->setMethods(['where'])
            ->getMock();
        $model->expects($this->once())->method('where')->willReturn(new class{
            public function first()
            {
                return false;
            }
        });

        /** @var HomeController $controller */
        $controller = $this->getMockBuilder(HomeController::class)
            ->disableOriginalConstructor()
            ->setMethods()
            ->getMock();

        $this->expectException(NotFoundHttpException::class);

        $controller->article($model, 'test', 'news');
    }


    public function testArticle()
    {
        $model = $this->getMockBuilder(Article::class)
            ->disableOriginalConstructor()
            ->setMethods(['where'])
            ->getMock();
        $model->expects($this->once())->method('where')->willReturn(new class{
            public function first()
            {
                return ['test'];
            }
        });

        /** @var HomeController $controller */
        $controller = $this->getMockBuilder(HomeController::class)
            ->disableOriginalConstructor()
            ->setMethods()
            ->getMock();

        $this->assertInstanceOf(View::class, $controller->article($model, 'test', 'news'));
    }
}