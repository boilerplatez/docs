<?php

namespace app\controller {

    use Michelf\MarkdownExtra;
    use RudraX\Utils\Webapp;

    class RxDocsController extends AbstractController
    {

        /**
         * @Description - Welcome page
         *
         * @RequestMapping(url="boilerplatez/docs/blob/master/{file}",method="GET", cache="file")
         * @RequestParams(true)
         */
        public function welcome($file=null)
        {

            $file = str_replace("/rudraks/docs/blob/master","",Webapp::$REQUEST_PATHNAME);
            $mdtext = file_get_contents(LIB_PATH."rudrax/docs/".$file);
            echo MarkdownExtra::defaultTransform($mdtext);

        }
    }
}