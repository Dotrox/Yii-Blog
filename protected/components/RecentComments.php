<?php
    Yii::import('zii.widgets.CPortlet');

    class RecentComments extends CPortlet implements ICommentTitle
    {
        public $title;
        public $maxComments=10;

        public static function modTitle(){
            $title = "Последние комментарии";
            return $title;
        }

        public function getRecentComments()
        {
            return Comment::model()->findRecentComments($this->maxComments);
        }

        protected function renderContent()
        {
            $this->render('recentComments');
        }
    }

    interface ICommentTitle
    {
        public static function modTitle();

    }