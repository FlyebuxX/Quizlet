# ============================================================================================
# IMPORTS
# ============================================================================================


from pprint import pprint
from cProfile import run
from re import T
# ============================================================================================
# FUNCTIONS
# ============================================================================================


def remove_character(tab: list) -> list:
    """
    Function that removes the \n at the end of each element
    :return new_tab: array which contains the elements without \n character
    """
    return [elt[:-1] for elt in tab]


def check_rundundancies(tab: list) -> list:
    """
    Function that checks whether a word is more than once in an array of words or not
    :param tab: list, array to check
    :return rundundancies: arrray, words that are more that once is the array
    """
    rundundancies = {}
    for word in tab:
        if word in rundundancies:
            rundundancies[word] += 1
        else:
            rundundancies[word] = 1

    return [(key, value) for key, value in rundundancies.items() if value > 1]


# ============================================================================================
# MAIN
# ============================================================================================


file = open('words.txt', 'r', encoding="utf-8")
file_content = file.readlines()
file.close()

pprint(check_rundundancies(remove_character(file_content)))