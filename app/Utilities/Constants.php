<?php
namespace App\Utilities;

class Constants
{
    const ANSWER_MC = 1;
    const ANSWER_TEXT = 2;
    const ANSWER_VIDEO = 3;

    const BASE_SCORE_PASS = 5;

    const SET_1 = 1;
    const SET_2 = 2;
    const SET_3 = 3;
    const SET_4 = 4;

    const SET_LIST = [
        self::SET_1 => 'Set 1',
        self::SET_2 => 'Set 2',
        self::SET_3 => 'Set 3',
        self::SET_4 => 'Set 4',
    ];

    const COURSE_READING = 1;
    const COURSE_WRITING = 2;
    const COURSE_LISTENING = 3;
    const COURSE_SPEAKING = 4;

    const COURSE_TYPES = [
        self::COURSE_READING => 'Reading',
        self::COURSE_WRITING => 'Writing',
        self::COURSE_LISTENING => 'Listening',
        self::COURSE_SPEAKING => 'Speaking',
    ];

    const QUESTION_PART_1 = 1;
    const QUESTION_PART_2 = 2;
    const QUESTION_PARTS = [
        self::QUESTION_PART_1 => 'Part 1',
        self::QUESTION_PART_2 => 'Part 2',
    ];

    const LEVEL_5_0 = '5.0';
    const LEVEL_5_5 = '5.5';
    const LEVEL_6_0 = '6.0';
    const LEVEL_6_5 = '6.5';

    const LEVELS = [
        self::LEVEL_5_0 => 'Level 5.0',
        self::LEVEL_5_5 => 'Level 5.5',
        self::LEVEL_6_0 => 'Level 6.0',
        self::LEVEL_6_5 => 'Level 6.5',
    ];

    const COURSE_LIVE = 1;
    const COURSE_RECORD = 2;
    const COURSE_DOCUMENT = 3;

    const COURSE_TYPE = [
        self::COURSE_LIVE => 'Live Course',
        self::COURSE_RECORD => 'Record Video',
    ];

    const HASTAG_POST = 1;
    const HASTAG_BLOG = 2;

    const TAG_TYPES = [
        self::HASTAG_POST => 'Forum hashtag',
        self::HASTAG_BLOG => 'Blog hashtag',
    ];

    const COMMENT_POST = 1,
        COMMENT_COURSE = 2;

    const BASE_SCORE_MC = 1;

    const EXAMINATION_ASSESSMENT = 1;
    const EXAMINATION_EXERCISES = 2;
    const EXAMINATION_QUIZ = 3;

    const EXAMINATION_TYPES = [
        self::EXAMINATION_ASSESSMENT => 'Assessment',
        self::EXAMINATION_EXERCISES => 'Exercises',
        self::EXAMINATION_QUIZ => 'Quiz',
    ];
}
