<?php


//Receivers
class TextEditor
{
    private string $text = "";

    public function write(string $word): void
    {
        $this->text .= $word;
        echo "📝 Written: \"{$word}\" | Full Text: \"{$this->text}\"\n";
    }

    public function delete(): string
    {
        $words = explode(" ", rtrim($this->text));
        $deleted = array_pop($words);
        $this->text = implode(" ", $words);
        $this->text = $this->text ? $this->text . " " : "";
        echo "🗑️ Deleted last word | Full Text: \"{$this->text}\"\n";
        return $deleted . " ";
    }

    public function getText(): string
    {
        return $this->text;
    }
}
