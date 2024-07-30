function solution(N, ratings) {
    // You must complete the logic for the function that is provided
    // before compiling or submitting to avoid an error.

    // Write your code here

    let maxRating = -1;
    let maxID = -1;

    for(let i = 0; i < N; i++) {
        const [id, rating] = ratings[i];

        if(rating > maxRating || (rating === maxRating && id < maxID)) {
            maxRating = rating;
            maxID = id;
        }
    }

    return maxID;

}

const N = 4;
const ratings = [
    [512, 2],
    [123, 3],
    [987, 4],
    [123, 5]
];

console.log(solution(N, ratings));


function formatDuration(seconds) {
    // You must complete the logic for the function that is provided
    // before compiling or submitting to avoid an error.

    // Write your code here

    if(seconds === 0) {
        return "now";
    }

    const yearInSeconds = 365 * 24 * 60 * 60;
    const dayInSeconds = 24 * 60 * 60;
    const hourInSeconds = 60 * 60;
    const minuteInSeconds = 60;

    let years = Math.floor(seconds / yearInSeconds);
    seconds %= yearInSeconds;

    let days = Math.floor(seconds / dayInSeconds);
    seconds %= dayInSeconds;

    let hours = Math.floor(seconds / hourInSeconds);
    seconds %= hourInSeconds;

    let minutes = Math.floor(seconds / minuteInSeconds);
    seconds %= minuteInSeconds;

    let result = "";
    let isFirst = true;

    function appendValueTime(value, unit) {
        if(value === 0) return;
        if(!isFirst) {
            result += ", ";
        }
        result += value + " " + unit;
        if(value > 1) {
            result += "s";
        }
        isFirst = false;
    }

    appendValueTime(years, "year");
    appendValueTime(days, "day");
    appendValueTime(hours, "hour");
    appendValueTime(minutes, "minute");
    appendValueTime(seconds, "second");

    return result;

}

console.log(formatDuration(62));    // Output esperado: "1 minute and 2 seconds"
console.log(formatDuration(3662));  // Output esperado: "1 hour, 1 minute and 2 seconds"
console.log(formatDuration(0));