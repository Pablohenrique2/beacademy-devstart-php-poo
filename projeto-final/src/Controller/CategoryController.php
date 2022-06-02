<?php

declare(strict_types=1);

namespace App\Controller;

class CategoryController extends AbstractController
{
  public function listAction()
  {
    parent::render("category/list");
  }
  public function addAction()
  {
    parent::render("category/add");
  }
  public function editAction()
  {
    parent::render("category/edit");
  }
}
