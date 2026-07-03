find ./ -type f -print0 | xargs -0 perl -pi -e 's/Dt_Story_Sets/Dt_Story_Sets/g';
find ./ -type f -print0 | xargs -0 perl -pi -e 's/dt_story_sets/dt_story_sets/g';
find ./ -type f -print0 | xargs -0 perl -pi -e 's/dt-story-sets/dt-story-sets/g';
find ./ -type f -print0 | xargs -0 perl -pi -e 's/dt_story_sets_post_type/dt_story_sets_post_type/g';
find ./ -type f -print0 | xargs -0 perl -pi -e 's/Dt Story Sets/Dt Story Sets/g';
mv dt-story-sets.php dt-story-sets.php
rm .rename.sh