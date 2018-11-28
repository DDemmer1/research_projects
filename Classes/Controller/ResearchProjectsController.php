<?php

namespace HistInst\ResearchProjects\Controller;

use HistInst\ResearchProjects\Domain\Repository\ResearchRepository;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

/**
 * Class ResearchProjectController
 *
 * @package HistInst\ResearchProjects\Controller
 */
class ResearchProjectsController extends ActionController
{

    /**
     * @var ResearchRepository
     */
    private $researchRepository;

    /**
     * Inject the research repository
     *
     * @param \HistInst\ResearchProjects\Domain\Repository\ResearchRepository $researchRepository
     */
    public function injectResearchRepository(ResearchRepository $researchRepository)
    {
        $this->researchRepository = $researchRepository;
    }

    /**
     * List Action
     *
     * @return void
     */
    public function listAction()
    {
        $researchList = $this->researchRepository->findAll();
        $this->view->assign('researchList', $researchList);
    }
}
