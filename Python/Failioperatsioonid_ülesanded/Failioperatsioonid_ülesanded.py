"""File operations."""

import csv


def read_file_contents(filename: str) -> str:
    """
    Read file contents into string.

    In this exercise, we can assume the file exists.

    :param filename: File to read.
    :return: File contents as string.
    """
    with open(filename, "r") as file:
        data = file.read()

    return data


def read_file_contents_to_list(filename: str) -> list:
    r"""
    Read file contents into list of lines.

    In this exercise, we can assume the file exists.
    Each line from the file should be a separate element.
    The order of the list should be the same as in the file.

    List elements should not contain new line (\n).

    :param filename: File to read.
    :return: List of lines.
    """
    
    list_of_lines= []
    with open(filename, "r") as file:

        for row in file:
            adjusted_row = row.strip(" \n")
            list_of_lines.append(adjusted_row)
        
    return list_of_lines


def read_csv_file(filename: str) -> list:
    """
    Read CSV file into list of rows.

    Each row is also a list of "columns" or fields.

    CSV (Comma-separated values) example:
    name,age
    john,12
    mary,14

    Should become:
    [
      ["name", "age"],
      ["john", "12"],
      ["mary", "14"]
    ]

    Use csv module.

    :param filename: File to read.
    :return: List of lists.
    """
    list_of_data = []
    
    with open(filename, "r") as csv_file:
        csv_reader = csv.reader(csv_file, delimiter=",")
        
        for row in csv_reader:
            list_of_data.append(row)
        
        return list_of_data


def write_contents_to_file(filename: str, contents: str) -> None:
    """
    Write contents to file.

    If the file does not exists, create it.

    :param filename: File to write to.
    :param contents: Content to write to.
    :return: None
    """
    file = open(filename, "w")

    for line in contents:
        file.write(line)

    file.close()


def write_lines_to_file(filename: str, lines: list) -> None:
    """
    Write lines to file.

    Lines is a list of strings, each represents a separate line in the file.

    There should be no new line in the end of the file.
    Unless the last element itself ends with the new line.

    :param filename: File to write to.
    :param lines: List of string to write to the file.
    :return: None
    """
    file = open(filename, "w")
    
    list_of_lines = []
    
    for line in lines:
        if line == lines[-1]:
            file.write(line)
        else:
            file.write(f"{line}\n")
    
    file.close()


def write_csv_file(filename: str, data: list) -> None:
    """
    Write data into CSV file.

    Data is a list of lists.
    List represents lines.
    Each element (which is list itself) represents columns in a line.

    [["name", "age"], ["john", "11"], ["mary", "15"]]
    Will result in csv file:

    name,age
    john,11
    mary,15

    Use csv module here.

    :param filename: Name of the file.
    :param data: List of lists to write to the file.
    :return: None
    """
    with open(filename, "w", newline="") as csv_file:
        csv_writer = csv.writer(csv_file, delimiter=",")

        for row in data:
            csv_writer.writerow(row)
    
    
write_csv_file("file2.csv", [["a", "b"], ["c", "d"]])


def merge_dates_and_towns_into_csv(dates_filename: str, towns_filename: str, csv_output_filename: str) -> None:
    """
    Merge information from two files into one CSV file.

    Dates file contains names and dates. Separated by colon.
    john:01.01.2001
    mary:06.03.2016

    You don't have to validate the date.
    Every line contains name, colon and date.

    Towns file contains names and towns. Separated by colon.
    john:london
    mary:new york

    Every line contains name, colon and town name.
    There are no headers in the input files.

    Those two files should be merged by names.
    The result should be a csv file:

    name,town,date
    john,london,01.01.2001
    mary,new york,06.03.2016

    Applies for the third part:
    If information about a person is missing, it should be "-" in the output file.

    The order of the lines should follow the order in dates input file.
    Names which are missing in dates input file, will follow the order
    in towns input file.
    The order of the fields is: name,town,date

    name,town,date
    john,-,01.01.2001
    mary,new york,-

    Hint: try to reuse csv reading and writing functions.
    When reading csv, delimiter can be specified.

    :param dates_filename: Input file with names and dates.
    :param towns_filename: Input file with names and towns.
    :param csv_output_filename: Output CSV-file with names, towns and dates.
    :return: None
    """
    dates_list = []
    towns_list = []
    dates_dict = {}
    towns_dict = {}
    
    with open(dates_filename) as csv_dates_file:
        csv_dates_reader = csv.reader(csv_dates_file, delimiter=":")
        
        for row in csv_dates_reader:
            dates_list.append(row)
    
    with open(towns_filename) as csv_towns_file:
        csv_towns_reader = csv.reader(csv_towns_file, delimiter=":")
        
        for row in csv_towns_reader:
            towns_list.append(row)
    
    for row in dates_list:
        dates_dict[row[0]] = row[1] 
    for row in towns_list:
        towns_dict[row[0]] = row[1]
            
    with open(csv_output_filename, "w", newline="") as csv_output_file:
        csv_output_writer = csv.writer(csv_output_file, delimiter=",")
        
            
        
                