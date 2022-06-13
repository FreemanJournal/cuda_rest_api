<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

// $router->get('/', function () use ($router) {
//     return $router->app->version();
// });

$router->group(['middleware' => 'auth'], function () use ($router) {

    $router->get('/generalData','GeneralInfoController@onSelectAll');

    $router->get('/menuItemData','MenuItemController@onSelectAll');

    $router->get('/portfolioData','PortfolioController@onSelectAll');

    $router->get('/serviceData','ServiceController@onSelectAll');

    $router->get('/teamData','TeamController@onSelectAll');

    $router->get('/teamSocialData','TeamSocialMediaController@onSelectAll');

    $router->get('/testimonialVideoData','TestimonialController@onSelectVideo');
    $router->get('/testimonialReviewData','TestimonialController@onSelectReview');
    $router->get('/testimonialData','TestimonialController@onSelectAll');

    $router->get('/usedTechnologyData','UsedTechnologyController@onSelectAll');

    $router->get('/skillData','SkillController@onSelectAll');

    $router->get('/contactData','ContactController@onSelectAll');
    $router->post('/contactData','ContactController@onSendContact');

    $router->get('/caseStudyData','CaseStudyController@onSelectAll');
    $router->get('/caseStudyDetailsData/{caseID}','CaseStudyController@onSelectfullCase');

    $router->get('/productDataFour','ProductController@onSelectFour');
  
    $router->get('/productDataDetails/{productId}','ProductController@onSelectDetails');
    $router->get('/productFAQData','ProductFAQController@onSelectAll');
});

