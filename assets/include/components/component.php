<?php

class Component
{
  private $modes = [
    "btn" =>
    [
      "fill" => 'text-white bg-[color:var(--blue-2)]',
      "border" => 'border'
    ],
  ];
  private $setMode = '';
  public function btn($text, $id = '',  $mode = 'fill', $setPadding = 'px-8 py-6')
  {
    if ($mode === 'fill') {
      $this->setMode = $this->modes['btn']['fill'];
    } else if ($mode === 'border') {
      $this->setMode = $this->modes['btn']['border'];
    }
    return <<<"HTML"
      <button
        class="
          {$id} text-4xl {$this->setMode}
          text-center
          {$setPadding}
          active:scale-95 transition-transform
          rounded-full
          text-[14px] font-bold leading-[17px]
         "
      >
        $text
      </button>
    HTML;
  }
};
