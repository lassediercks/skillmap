
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body ng-controller="CategoryController as categorys">
 <h1>Skillmap of lassediercks</h1>
    <p>right now these skills and levels are created without evaluation or feedback</p>
<div class="skillmap">

    <div class="category" ng-repeat="category in categorys.CATNAME">
        <div class="category-title">
            {{category.name}}
        </div>
        <div
            class="skill"
            ng-repeat="skill in category.skills">
            <span class="title">
                {{skill.name}}
            </span>

            <div ng-if="skill.level != null" class="skill-level skill-level-{{skill.level}}">
                <div class="skill-level-bar">
                </div>
                <div class="skill-level-seperator"></div>
                <div class="skill-level-seperator"></div>
                <div class="skill-level-seperator"></div>
                <div class="skill-level-seperator"></div>
                <div class="skill-level-seperator"></div>
            </div>

        </div>

    </div>

    <div class="skills-definition">
        <h2>Definition of the levels</h2>
            <ol start="0">
                <li>
                none: I don't know shit about this
                </li>
                <li>
                novice: I understand what it's doing, I can read it but I'm not able to do it on my own.
                </li>
                <li>
                junior: I've got the baseline of this profession and can create/adapt easy things like I want to
                </li>
                <li>
                medior: I've got solid knowledge of this profession and know what and how to achieve things with it
                </li>
                <li>
                senior: I'm da pimp! others ask me for help in this topic and basically I know everything about this. I understand problems so good that I'm able to explain this
                </li>
                <li>
                master: I'm so good in this topic that I can question the profession itself.
                </li>
            </ol>

    </div>
</div>    
<script src="/app/bundle.js"></script>
 
</body>
</html>
