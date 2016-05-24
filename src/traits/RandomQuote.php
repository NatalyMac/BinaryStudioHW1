<?php
namespace app\traits;

trait RandomQuote 
{
	public  $qoutes = ['A vote is like a rifle: its usefulness depends upon the character of the user.',
	                   'Do what you can, with what you have, where you are.',
	                   'I can be President of the United States, or I can control Alice (daughter) . I cannot possibly do both.',
	                   "When you play, play hard; when you work, don't play at all.",
	                   'Forgive your enemies, but never forget their names.',
	                   'Mankind must put an end to war or war will put an end to mankind.', 
	                   'Washington is a city of Southern efficiency and Northern charm.',
	                   'We must never forget that art is not a form of propaganda; it is a form of truth.',
	                   'We must use time as a tool, not as a crutch.',
	                   'We need men who can dream of things that never were.',
	                   'The ignorance of one voter in a democracy impairs the security of all.', 
	                   'Leadership and learning are indispensable to each other.', 
	                   'A countryman between two lawyers is like a fish between two cats.',
	                   'All would live long, but none would be old.',
	                   'Beware of the young doctor and the old barber.',
	                   'Creditors have better memories than debtors.', 
	                   'Energy and persistence conquer all things.',
	                   'Fish and visitors smell in three days.',
	                   'Genius without education is like silver in the mine.',
	                   'God heals, and the doctor takes the fees.', 
	                   'Having been poor is no shame, but being ashamed of it, is.',
	                   'He that lives upon hope will die fasting.',
	                    ];
	
	public function sayQoute() 
	{
		$num = rand(0 , 21);
        echo $this->qoutes[$num] . "\n";
  
    }
}
