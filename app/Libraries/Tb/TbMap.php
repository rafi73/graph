<?php
namespace App\Libraries\Tb;
class TbMap extends Tools {
    protected $thinkBoardHeaderIndex        = 0     ;
    protected $thinkBoardHeaderLength       = 0     ;
    protected $editionHeaderIndex           = 0     ;
    protected $editionHeaderLength          = 0     ;
    protected $playerHeaderIndex            = 0     ;
    protected $playerHeaderLength           = 0     ;
    protected $contentsHeaderIndex          = 0     ;
    protected $contentsHeaderLength         = 0     ;
    protected $helpMessageSizeIndex         = 0     ;
    protected $helpMessageSizeLength        = 0     ;
    protected $helpMessageDataIndex         = 0     ;
    protected $helpMessageDataLength        = 0     ;
    protected $autoEndSizeIndex             = 0     ;
    protected $autoEndSizeLength            = 0     ;
    protected $autoEndDataIndex             = 0     ;
    protected $autoEndDataLength            = 0     ;
    protected $urlSizeIndex                 = 0     ;
    protected $urlSizeLength                = 0     ;
    protected $urlDataIndex                 = 0     ;
    protected $urlDataLength                = 0     ;
    protected $pclpmSizeIndex               = 0     ;
    protected $pclpmSizeLength              = 0     ;
    protected $pclpmDataIndex               = 0     ;
    protected $pclpmDataLength              = 0     ;
    protected $engHelpSizeIndex             = 0     ;
    protected $engHelpSizeLength            = 0     ;
    protected $engHelpDataIndex             = 0     ;
    protected $engHelpDataLength            = 0     ;
    protected $jpnHelpSizeIndex             = 0     ;
    protected $jpnHelpSizeLength            = 0     ;
    protected $jpnHelpDataIndex             = 0     ;
    protected $jpnHelpDataLength            = 0     ;
    protected $lpfHeaderIndex               = 0     ;
    protected $lpfHeaderLength              = 0     ;
    protected $loopIndex                    = 0     ;
    protected $loopLength                   = 0     ;
    protected $qsfHeaderIndex               = 0     ;
    protected $qsfHeaderLength              = 0     ;
    protected $baisokuIndex                 = 0     ;
    protected $baisokuLength                = 0     ;
    protected $pcgHeaderIndex               = 0     ;
    protected $pcgHeaderLength              = 0     ;
    protected $finalScreenIndex             = 0     ;
    protected $finalScreenLength            = 0     ;
    protected $finalScreenSizeIndex         = 0     ;
    protected $finalScreenSizeLength        = 0     ;
    protected $finalScreenDataIndex         = 0     ;
    protected $finalScreenDataLength        = 0     ;
    protected $ulcHeaderIndex               = 0     ;
    protected $ulcHeaderLength              = 0     ;
    protected $urlColorSizeIndex            = 0     ;
    protected $urlColorSizeLength           = 0     ;
    protected $urlColorDataIndex            = 0     ;
    protected $urlColorDataLength           = 0     ;
    protected $ppwHeaderIndex               = 0     ;
    protected $ppwHeaderLength              = 0     ;
    protected $passwordSizeIndex            = 0     ;
    protected $passwordSizeLength           = 0     ;
    protected $passwordDataIndex            = 0     ;
    protected $passwordDataLength           = 0     ;
    protected $ld0HeaderIndex               = 0     ;
    protected $ld0HeaderLength              = 0     ;
    protected $unknownSizeIndex             = 0     ;
    protected $unknownSizeLength            = 0     ;
    protected $unknownDataIndex             = 0     ;
    protected $unknownDataLength            = 0     ;
    protected $ld1HeaderIndex               = 0     ;
    protected $ld1HeaderLength              = 0     ;
    protected $startAndEndDateSizeIndex     = 0     ;
    protected $startAndEndDateSizeLength    = 0     ;
    protected $startAndEndDateDataIndex     = 0     ;
    protected $startAndEndDateDataLength    = 0     ;
    protected $clHeaderIndex                = 0     ;
    protected $clHeaderLength               = 0     ;
    protected $chapterSizeIndex             = 0     ;
    protected $chapterSizeLength            = 0     ;
    protected $chapterDataIndex             = 0     ;
    protected $chapterDataLength            = 0     ;
    protected $busHeaderIndex               = 0     ;
    protected $busHeaderLength              = 0     ;
    protected $shitsumonSizeIndex           = 0     ;
    protected $shitsumonSizeLength          = 0     ;
    protected $shitsumonDataIndex           = 0     ;
    protected $shitsumonDataLength          = 0     ;
    protected $blockSequenceSizeIndex       = 0     ;
    protected $blockSequenceSizeLength      = 0     ;
    protected $blockSequenceDataIndex       = 0     ;
    protected $blockSequenceDataLength      = 0     ;
    protected $hayawakariIndex              = 0     ;
    protected $hayawakariLength             = 0     ;

    protected $flgloop                      = false ;
    protected $flgBaisoku                   = false ;
    protected $flgFinalScreen               = false ;
    protected $flgShitsumon                 = false ;
    protected $flgHayawakari                = false ;

    protected $countBlock                   = 0     ;

    protected $jpegSizeIndex                = []    ;
    protected $jpegSizeLength               = []    ;
    protected $jpegDataIndex                = []    ;
    protected $jpegDataLength               = []    ;
    protected $pmdSizeIndex                 = []    ;
    protected $pmdSizeLength                = []    ;
    protected $pmdDataIndex                 = []    ;
    protected $pmdDataLength                = []    ;
    protected $mp3x1SizeIndex               = []    ;
    protected $mp3x1SizeLength              = []    ;
    protected $mp3x1DataIndex               = []    ;
    protected $mp3x1DataLength              = []    ;
    protected $mp3x2SizeIndex               = []    ;
    protected $mp3x2SizeLength              = []    ;
    protected $mp3x2DataIndex               = []    ;
    protected $mp3x2DataLength              = []    ;
    protected $mp3x4SizeIndex               = []    ;
    protected $mp3x4SizeLength              = []    ;
    protected $mp3x4DataIndex               = []    ;
    protected $mp3x4DataLength              = []    ;

    protected $ready                        = false ;
}
?>