
const WORDS = ['ability', 'absence', 'academy', 'account', 'accused', 'achieve', 'acquire', 'acrobat', 'address', 'advance', 'adverse', 'advised', 'adviser', 'against', 'airline', 'airport', 'alcohol', 'alleged', 'already', 'analyst', 'ancient', 'another', 'anxiety', 'anxious', 'anybody', 'applied', 'arrange', 'arrival', 'article', 'assault', 'assumed', 'assured', 'attempt', 'attract', 'auction', 'average', 'backing', 'balance', 'banking', 'barrier', 'battery', 'bearing', 'beating', 'because', 'bedroom', 'believe', 'beneath', 'benefit', 'besides', 'between', 'billion', 'binding', 'brother', 'brought', 'burning', 'cabinet', 'caliber', 'calling', 'capable', 'capital', 'captain', 'caption', 'capture', 'careful', 'carrier', 'caution', 'ceiling', 'central', 'centric', 'century', 'certain', 'chamber', 'channel', 'chapter', 'charity', 'charlie', 'charter', 'checked', 'chicken', 'chronic', 'circuit', 'classes', 'classic', 'climate', 'closing', 'closure', 'clothes', 'collect', 'college', 'combine', 'comfort', 'command', 'comment', 'compact', 'company', 'compare', 'compete', 'complex', 'concept', 'concern', 'concert', 'conduct', 'confirm', 'connect', 'consent', 'consist', 'contact', 'contain', 'content', 'contest', 'context', 'control', 'convert', 'correct', 'council', 'counsel', 'counter', 'country', 'crucial', 'crystal', 'culture', 'current', 'cutting', 'dealing', 'decided', 'decline', 'default', 'defence', 'deficit', 'deliver', 'density', 'deposit', 'desktop', 'despite', 'destroy', 'develop', 'devoted', 'diamond', 'digital', 'discuss', 'disease', 'display', 'dispute', 'distant', 'diverse', 'divided', 'drawing', 'driving', 'dynamic', 'eastern', 'economy', 'edition', 'elderly', 'element', 'engaged', 'enhance', 'essence', 'evening', 'evident', 'exactly', 'examine', 'example', 'excited', 'exclude', 'exhibit', 'expense', 'explain', 'explore', 'express', 'extreme', 'factory', 'faculty', 'failing', 'failure', 'fashion', 'feature', 'federal', 'feeling', 'fiction', 'fifteen', 'filling', 'finance', 'finding', 'fishing', 'fitness', 'foreign', 'forever', 'formula', 'fortune', 'forward', 'founder', 'freedom', 'further', 'gallery', 'gateway', 'general', 'genetic', 'genuine', 'gigabit', 'greater', 'hanging', 'heading', 'healthy', 'hearing', 'heavily', 'helpful', 'helping', 'herself', 'highway', 'himself', 'history', 'holding', 'holiday', 'housing', 'however', 'hundred', 'husband', 'illegal', 'illness', 'imagine', 'imaging', 'improve', 'include', 'initial', 'inquiry', 'insight', 'install', 'instant', 'instead', 'intense', 'interim', 'involve', 'jointly', 'journal', 'journey', 'justice', 'justify', 'keeping', 'killing', 'kingdom', 'kitchen', 'knowing', 'landing', 'largely', 'lasting', 'leading', 'learned', 'leisure', 'liberal', 'liberty', 'library', 'license', 'limited', 'listing', 'logical', 'loyalty', 'machine', 'manager', 'married', 'massive', 'maximum', 'meaning', 'measure', 'medical', 'meeting', 'mention', 'message', 'million', 'mineral', 'minimal', 'minimum', 'missing', 'mission', 'mistake', 'mixture', 'monitor', 'monthly', 'morning', 'musical', 'mystery', 'natural', 'neither', 'nervous', 'network', 'neutral', 'notable', 'nothing', 'nowhere', 'nuclear', 'nursing', 'obvious', 'offense', 'officer', 'ongoing', 'opening', 'operate', 'opinion', 'optical', 'organic', 'outcome', 'outdoor', 'outlook', 'outside', 'overall', 'pacific', 'package', 'painted', 'parking', 'partial', 'partner', 'passage', 'passing', 'passion', 'passive', 'patient', 'pattern', 'payable', 'payment', 'penalty', 'pending', 'pension', 'percent', 'perfect', 'perform', 'perhaps', 'phoenix', 'picking', 'picture', 'pioneer', 'plastic', 'pointed', 'popular', 'portion', 'poverty', 'precise', 'predict', 'premier', 'premium', 'prepare', 'present', 'prevent', 'primary', 'printer', 'privacy', 'private', 'problem', 'proceed', 'process', 'produce', 'product', 'profile', 'program', 'project', 'promise', 'promote', 'protect', 'protein', 'protest', 'provide', 'publish', 'purpose', 'pushing', 'qualify', 'quality', 'quarter', 'radical', 'railway', 'readily', 'reading', 'reality', 'realize', 'receipt', 'receive', 'recover', 'reflect', 'regular', 'related', 'release', 'remains', 'removal', 'removed', 'replace', 'request', 'require', 'reserve', 'resolve', 'respect', 'respond', 'restore', 'retired', 'revenue', 'reverse', 'rollout', 'routine', 'running', 'satisfy', 'science', 'section', 'segment', 'serious', 'service', 'serving', 'session', 'setting', 'seventh', 'several', 'shortly', 'showing', 'silence', 'silicon', 'similar', 'sitting', 'sixteen', 'skilled', 'smoking', 'society', 'somehow', 'someone', 'speaker', 'special', 'species', 'sponsor', 'station', 'storage', 'strange', 'stretch', 'student', 'studied', 'subject', 'succeed', 'success', 'suggest', 'summary', 'support', 'suppose', 'supreme', 'surface', 'surgery', 'surplus', 'survive', 'suspect', 'sustain', 'teacher', 'telecom', 'telling', 'tension', 'theatre', 'therapy', 'thereby', 'thought', 'through', 'tonight', 'totally', 'touched', 'towards', 'traffic', 'trouble', 'turning', 'typical', 'uniform', 'unknown', 'unusual', 'upgrade', 'upscale', 'utility', 'variety', 'various', 'vehicle', 'venture', 'version', 'veteran', 'victory', 'viewing', 'village', 'violent', 'virtual', 'visible', 'waiting', 'walking', 'wanting', 'warning', 'warrant', 'wearing', 'weather', 'webcast', 'website', 'wedding', 'weekend', 'welcome', 'welfare', 'western', 'whereas', 'whereby', 'whether', 'willing', 'winning', 'without', 'witness', 'working', 'writing', 'written']
const NUMBER_OF_GUESSES = 7;
let guessesRemaining = NUMBER_OF_GUESSES;
let currentGuess = [];
let nextLetter = 0;
let rightGuessString = WORDS[Math.floor(Math.random() * WORDS.length)]
console.log(rightGuessString)

function initBoard() {
    let board = document.getElementById("game-board");

    for (let i = 0; i < NUMBER_OF_GUESSES; i++) {
        let row = document.createElement("div")
        row.className = "letter-row"
        
        for (let j = 0; j < 7; j++) {
            let box = document.createElement("div")
            box.className = "letter-box"
            row.appendChild(box)
        }

        board.appendChild(row)
    }
}

initBoard()

document.addEventListener("keyup", (e) => {

    if (guessesRemaining === 0) {
        return
    }

    let pressedKey = String(e.key)
    if (pressedKey === "Backspace" && nextLetter !== 0) {
        deleteLetter()
        return
    }

    if (pressedKey === "Enter") {
        checkGuess()
        return
    }

    let found = pressedKey.match(/[a-z]/gi)
    if (!found || found.length > 1) {
        return
    } else {
        insertLetter(pressedKey)
    }
})

function insertLetter (pressedKey) {
    if (nextLetter === 7) {
        return
    }
    pressedKey = pressedKey.toLowerCase()

    let row = document.getElementsByClassName("letter-row")[7 - guessesRemaining]
    let box = row.children[nextLetter]
    animateCSS(box, "pulse")
    box.textContent = pressedKey
    box.classList.add("filled-box")
    currentGuess.push(pressedKey)
    nextLetter += 1
}

function deleteLetter () {
    let row = document.getElementsByClassName("letter-row")[7 - guessesRemaining]
    let box = row.children[nextLetter - 1]
    box.textContent = ""
    box.classList.remove("filled-box")
    currentGuess.pop()
    nextLetter -= 1
}

function checkGuess () {
    let row = document.getElementsByClassName("letter-row")[7 - guessesRemaining]
    let guessString = ''
    let rightGuess = Array.from(rightGuessString)

    for (const val of currentGuess) {
        guessString += val
    }

    if (guessString.length != 7) {
        toastr.error("Not enough letters!")
        return
    }

    if (!WORDS.includes(guessString)) {
        toastr.error("Word not in list!")
        return
    }

    
    for (let i = 0; i < 7; i++) {
        let letterColor = ''
        let box = row.children[i]
        let letter = currentGuess[i]
        
        let letterPosition = rightGuess.indexOf(currentGuess[i])
        // is letter in the correct guess
        if (letterPosition === -1) {
            letterColor = 'grey'
        } else {
            // now, letter is definitely in word
            // if letter index and right guess index are the same
            // letter is in the right position 
            if (currentGuess[i] === rightGuess[i]) {
                // shade green 
                letterColor = 'green'
            } else {
                // shade box yellow
                letterColor = 'yellow'
            }

            rightGuess[letterPosition] = "#"
        }

        let delay = 250 * i
        setTimeout(()=> {
            //flip box
            animateCSS(box, 'flipInX')
            //shade box
            box.style.backgroundColor = letterColor
            shadeKeyBoard(letter, letterColor)
        }, delay)
    }

    if (guessString === rightGuessString) {
        toastr.success("You guessed right! Game over!")
        guessesRemaining = 0
        var http = new XMLHttpRequest();
        var url = 'points.php';
        var params = 'win=1';
        http.open('POST', url, true);
        http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        http.send(params);
    } else {
        guessesRemaining -= 1;
        currentGuess = [];
        nextLetter = 0;

        if (guessesRemaining === 0) {
            toastr.error("You've run out of guesses! Game over!")
            toastr.info(`The right word was: "${rightGuessString}"`)
            var http = new XMLHttpRequest();
            var url = 'points.php';
            var params = 'loss=1';
            http.open('POST', url, true);
            http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            http.send(params);
        }
    }
}

function shadeKeyBoard(letter, color) {
    for (const elem of document.getElementsByClassName("keyboard-button")) {
        if (elem.textContent === letter) {
            let oldColor = elem.style.backgroundColor
            if (oldColor === 'green') {
                return
            } 

            if (oldColor === 'yellow' && color !== 'green') {
                return
            }

            elem.style.backgroundColor = color
            break
        }
    }
}

document.getElementById("keyboard-cont").addEventListener("click", (e) => {
    const target = e.target
    
    if (!target.classList.contains("keyboard-button")) {
        return
    }
    let key = target.textContent

    if (key === "Del") {
        key = "Backspace"
    } 

    document.dispatchEvent(new KeyboardEvent("keyup", {'key': key}))
})

const animateCSS = (element, animation, prefix = 'animate__') =>
  // We create a Promise and return it
  new Promise((resolve, reject) => {
    const animationName = `${prefix}${animation}`;
    // const node = document.querySelector(element);
    const node = element
    node.style.setProperty('--animate-duration', '0.3s');
    
    node.classList.add(`${prefix}animated`, animationName);

    // When the animation ends, we clean the classes and resolve the Promise
    function handleAnimationEnd(event) {
      event.stopPropagation();
      node.classList.remove(`${prefix}animated`, animationName);
      resolve('Animation ended');
    }

    node.addEventListener('animationend', handleAnimationEnd, {once: true});
});